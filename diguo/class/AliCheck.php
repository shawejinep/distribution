<?php 

class Pecker_Scanner
{
    private $extend = array();
    private $parser;
    private $report;
    private $function;
    private $path;
    private $dropdir = array(); 

    //input target file path which need to be scan
    function __construct()
    {
        set_time_limit(0);
        define('MAX_STRLEN', 500);    //max length value of hash string

        $config = array( 
            'extend' => array('php','inc','php5'),
            'function' => array(
                //code execute
                'exec',
                'system',
                'passthru',
                'shell_exec',
                'assert',
                //file operations
                'proc_open',
                'popen',
                'copy',
                'parse_ini_file',
                'show_source',
                'file_put_contents',
                //dangerous 
                'create_function',
                'curl_exec',
                'call_user_func_array',
                'call_user_func',
                'preg_replace',
                'include',
                //callback function
                'array_map',
                'usort',
                'uasort',
                'uksort',
                'array_filter',
                'array_reduce',
                'array_diff_uassoc',
                'array_diff_ukey',
                'array_udiff',
                'array_udiff_assoc',
                'array_udiff_uassoc',
                'array_intersect_assoc',
                'array_intersect_uassoc',
                'array_uintersect',
                'array_uintersect_assoc',
                'array_uintersect_uassoc',
                'array_walk',
                'array_walk_recursive'
            )
        );
 
        $this->setExtend($config['extend']);
        $this->setFunction($config['function']);


        $this->parser = new Pecker_Parser(new Pecker_Lexer());
        $this->report = new Pecker_Loger();
        $this->extend['php'] = true;
    }

    /**
     * set expansion name
     * @param array $extend
     */
    public function setExtend(array $extend)
    {
        foreach ($extend as $v)
        {
            $this->extend[trim(trim($v),'.')] = true;
        }
        if (!isset($this->extend['php']))
        {
            $this->extend['php'] = true;
        }
    }
 

    /**
     * set functions of check list
     * @param array $function
     */
    public function setFunction(array $function)
    {
        foreach ($function as $fun)
        {
            $this->function[trim($fun)] = true;
        }
        if(!isset($this->function['eval']))
        {
            $this->function['eval'] = true;
        }
    }
 

    /**
     * scan files
     * @param string $file
     * @return boolean
     */
    public function scanFileContent($file, $fileContent)
    {
        $this->report->setFile($file); 
        $bRS = $this->parser->parse($fileContent);
        if(false === $bRS)
        {
            $this->report->errorLog($this->parser->getErrmsg());
            return false;
        }
        $this->checkTokens($this->parser->getTokens()); 
        $this->checkEntropy($file, $fileContent);
    } 
 

    /** 
     * @param string $fileContent
     * @return boolean 
     */
    private function checkEntropy($fileName, $fileContent)
    { 
        $tokens = str_split($fileContent, 1);  
        $shannon = new Entropy($tokens);
        $bits = $shannon->bits;
        $maxent = $shannon->maxent;
        if ( ($bits > 4)  && ($maxent > 4) ) 
        {
            $this->report->catchLog( "Entropy", $fileName, array('more'=>$bits, 'less'=>$maxent) ); 
        } 
    }  

 
    /**
     * check dangerous functions
     * @param array $tokens
     */
    private function checkTokens(array $tokens)
    {
        $i = 0;
        $curly = false;
        $curly_str = '';
        $curly_num = 0;  
        
        foreach ($tokens as $k => $token)
        { 
            if (!$curly && is_array($token))
            {
                switch ($token[0])
                {
                    case T_EVAL:
                        $this->report->catchLog($token[1],$token[2],$this->parser->getPieceTokenAll($k)); 
                        break;
                    case T_FUNCTION:
                        if (isset($this->function[$token[1]]))
                        {
                            $this->report->catchLog($token[1],$token[2],$this->parser->getPieceTokenAll($k));
                        }
                        break;
                    case T_VARIABLE:
                        $ntoken = $this->parser->getNextToken($k); 
                        $ptoken = $this->parser->getPreToken($k); 
                        if ($ntoken === '(' && $ptoken != '->' && $ptoken !== '::' && $ptoken !== 'function' && $ptoken !== 'new')
                        {
                            $this->report->catchLog($token[1], $token[2],$this->parser->getPieceTokenAll($k));
                        }
                        elseif ($ntoken === '{' || $ntoken === '[' )
                        {
                            $nt = $this->parser->getVariableToken($k);
                            if ($nt['token'] === '(')
                            {
                                $this->report->catchLog($token[1].$nt['func'], $token[2],$this->parser->getPieceTokenAll($nt['key']+$k));
                            }
                        }
                        break;
                    case T_STRING:
                        if (isset($this->function[$token[1]]))
                        {
                            $ntoken = $this->parser->getNextToken($k);
                            $ptoken = $this->parser->getPreToken($k);
                            if ($ntoken === '(' && $ptoken != '->' && $ptoken != '::' && $ptoken != 'function')
                            {
                                if($token[1] == 'preg_replace')
                                {
                                    $strRegex = $this->parser->getNextToken($k+1);
                                    if($this->_hasCallback($strRegex))
                                    {
                                        $this->report->catchLog($token[1], $token[2],$this->parser->getPieceTokenAll($k));
                                    }
                                }
                                else
                                {
                                    $this->report->catchLog($token[1], $token[2],$this->parser->getPieceTokenAll($k));
                                }
                            }
                        }
                        break;
                    case T_INCLUDE:
                    case T_INCLUDE_ONCE:
                    case T_REQUIRE:
                    case T_REQUIRE_ONCE:
                        if (isset($this->function['include']) || isset($this->function['include_once']) || isset($this->function['require']) || isset($this->function['require_once']))
                        {
                            $infile = $this->parser->getFilepathToken($k);
                            $fileinfo = pathinfo($infile);
                            if (!isset($this->extend[$fileinfo['extension']]))
                            {
                                $this->report->catchLog($token[1], $token[2],$this->parser->getPieceTokenAll($k));
                            }
                        }
                        break;
                    default:
                }
            }
            elseif ($curly)
            {
                //Complex (curly) syntax
                if (!is_array($token))
                {
                    if ($token === '{')
                    {
                        $curly_str .= '{';
                        $curly_num ++;
                    }
                    elseif($token === '}')
                    {
                        $curly_str .= '}';
                        $curly_num --;
                    }
                }
                else
                {
                    $curly_str .= $token[1];
                }
                if ($curly_num == 0)
                {
                    $curly = false;
                    $this->report->catchLog($curly_str, 0,$this->parser->getPieceTokenAll($k));
                }
            }
            elseif($token === '$')
            {
                /**
                 * Zend_language_scanner.c : yy56 、yy61
                 *
                 $nt = $this->parser->getNextToken($k);
                 switch ($nt)
                 {
                 case '$':
                 break;
                 case '\\':
                 break;
                 case '{':
                 break;
                 default:
                 }
                 */
                $nt = $this->parser->getVariableToken($k);
                if ($nt['token'] === '{')
                {
                    $curly = true;
                    $curly_str = '$';
                    $curly_num = 0;
                }
            }
        }
    }

    /**
     * get results
     * @return Ambigous <multitype:, multitype:boolean string multitype: >
     */
    public function getReport()
    {
        return $this->report->getReport();
    }

    /**
     * grep modifier 'e' in regex string
     * @param string $str
     * @return boolean
     */
    private function _hasCallback($str)
    {
        $str = trim($str);
        if (substr($str,0,1) == '$')
        {
            return true;
        }
        $a = subStr(subStr($str,1),0,-1);
        $start_delimiter = $end_delimiter = $a{0};
        $strabc = '([{< )]}>';
        if (false !== ($num = strpos($strabc,$start_delimiter)))
        {
            $end_delimiter = $strabc{$num+5};
        }
        if (false !== ($num1 = strrpos($str,$end_delimiter)))
        {
            $modifiers = substr($str,$num1+1);
            if (false !== strpos($modifiers,'e'))
            {
                return true;
            }
        }
        return false;
    }
}


class Pecker_Lexer
{
    protected $code;
    protected $tokens;
    protected $pos;
    protected $line;
    protected $errMsg;
    protected $dropTokens;

    public function __construct() {

        $this->tokenMap = $this->createTokenMap();
        // map of tokens to drop while lexing (the map is only used for isset lookup,
        // that's why the value is simply set to 1; the value is never actually used.)
        $this->dropTokens = array_fill_keys(array(T_WHITESPACE, T_OPEN_TAG), 1);
    }

    /**
     * Initializes the lexer for lexing the provided source code.
     *
     * @param string $code The source code to lex
     *
     * @throws PHPParser_Error on lexing errors (unterminated comment or unexpected character)
     */
    public function startLexing($code)
    {
        if (preg_match('/<\?(php)?\s*@Zend;[\r\n|\n]+\d+;/', $code)) {
            $this->errMsg = 'Encrypt with Zend optimizer.';
            return false;
        }
        $this->resetErrors();
        $this->tokens = token_get_all($code);
        $this->code = $code;
        $this->pos  = -1;
        $this->line =  1;
        return $this->checkError();
    }

    protected function resetErrors() {
        // clear error_get_last() by forcing an undefined variable error
        @$undefinedVariable;
    }

    protected function checkError()
    {
        $error = error_get_last();

        if (preg_match('~^Unterminated comment starting line ([0-9]+)$~',$error['message'], $matches))
        {
            $this->errMsg = 'Unterminated comment at line '.$matches[1];
            return false;
        }

        if (preg_match('~^Unexpected character in input:  \'(.)\' \(ASCII=([0-9]+)\)~s',$error['message'], $matches))
        {
            $this->errMsg = sprintf('Unexpected character "%s" (ASCII %d)', $matches[1], $matches[2]);
            return false;
        }

        // PHP cuts error message after null byte, so need special case
        if (preg_match('~^Unexpected character in input:  \'$~', $error['message']))
        {
            return false;
        }

        //@todo  对其他类型语法错误检测
        return true;
    }

    public function getError()
    {
        return $this->errMsg;
    }


    /**
     * Fetches the next token.
     *
     * @param mixed $value           Variable to store token content in
     * @param mixed $startAttributes Variable to store start attributes in
     * @param mixed $endAttributes   Variable to store end attributes in
     *
     * @return int Token id
     */
    public function getNextToken(&$value = null, &$startAttributes = null, &$endAttributes = null) {
        $startAttributes = array();
        $endAttributes   = array();

        while (isset($this->tokens[++$this->pos])) {
            $token = $this->tokens[$this->pos];

            if (is_string($token)) {
                $startAttributes['startLine'] = $this->line;
                $endAttributes['endLine']     = $this->line;

                // bug in token_get_all
                if ('b"' === $token) {
                    $value = 'b"';
                    return ord('"');
                } else {
                    $value = $token;
                    return ord($token);
                }
            } else {
                $this->line += substr_count($token[1], "\n");

                if (T_COMMENT === $token[0]) {
                    //                     $startAttributes['comments'][] = new PHPParser_Comment($token[1], $token[2]);
                } elseif (T_DOC_COMMENT === $token[0]) {
                    //                     $startAttributes['comments'][] = new PHPParser_Comment_Doc($token[1], $token[2]);
                } elseif (!isset($this->dropTokens[$token[0]])) {
                    $value = $token[1];
                    $startAttributes['startLine'] = $token[2];
                    $endAttributes['endLine']     = $this->line;

                    return $this->tokenMap[$token[0]];
                }
            }
        }

        $startAttributes['startLine'] = $this->line;

        // 0 is the EOF token
        return 0;
    }

    /**
     * Creates the token map.
     *
     * The token map maps the PHP internal token identifiers
     * to the identifiers used by the Parser. Additionally it
     * maps T_OPEN_TAG_WITH_ECHO to T_ECHO and T_CLOSE_TAG to ';'.
     *
     * @return array The token map
     */
    protected function createTokenMap() 
    {
        $tokenMap = array();

        // 256 is the minimum possible token number, as everything below
        // it is an ASCII value
        for ($i = 256; $i < 1000; ++$i) 
        {
            // T_DOUBLE_COLON is equivalent to T_PAAMAYIM_NEKUDOTAYIM
            if (T_DOUBLE_COLON === $i) 
            {
                $tokenMap[$i] = Pecker_Parser::T_PAAMAYIM_NEKUDOTAYIM;
                // T_OPEN_TAG_WITH_ECHO with dropped T_OPEN_TAG results in T_ECHO
            } 
            elseif(T_OPEN_TAG_WITH_ECHO === $i) 
            {
                $tokenMap[$i] = Pecker_Parser::T_ECHO;
                // T_CLOSE_TAG is equivalent to ';'
            } 
            elseif(T_CLOSE_TAG === $i) 
            {
                $tokenMap[$i] = ord(';');
                // and the others can be mapped directly
            } 
            elseif ('UNKNOWN' !== ($name = token_name($i)) && defined($name = 'Pecker_Parser::' . $name) )
            {
                $tokenMap[$i] = constant($name);
            }
        }

        return $tokenMap;
    }

    public function getTokens()
    {
        return $this->tokens;
    }
}


class Pecker_Parser
{
    const TOKEN_NONE    = -1;
    const TOKEN_INVALID = 151;

    const TOKEN_MAP_SIZE = 386;

    const YYLAST       = 1008;
    const YY2TBLSTATE  = 316;
    const YYGLAST      = 444;
    const YYNLSTATES   = 531;
    const YYUNEXPECTED = 32767;
    const YYDEFAULT    = -32766;

    // {{{ Tokens
    const YYERRTOK = 256;
    const T_INCLUDE = 257;
    const T_INCLUDE_ONCE = 258;
    const T_EVAL = 259;
    const T_REQUIRE = 260;
    const T_REQUIRE_ONCE = 261;
    const T_LOGICAL_OR = 262;
    const T_LOGICAL_XOR = 263;
    const T_LOGICAL_AND = 264;
    const T_PRINT = 265;
    const T_YIELD = 266;
    const T_PLUS_EQUAL = 267;
    const T_MINUS_EQUAL = 268;
    const T_MUL_EQUAL = 269;
    const T_DIV_EQUAL = 270;
    const T_CONCAT_EQUAL = 271;
    const T_MOD_EQUAL = 272;
    const T_AND_EQUAL = 273;
    const T_OR_EQUAL = 274;
    const T_XOR_EQUAL = 275;
    const T_SL_EQUAL = 276;
    const T_SR_EQUAL = 277;
    const T_BOOLEAN_OR = 278;
    const T_BOOLEAN_AND = 279;
    const T_IS_EQUAL = 280;
    const T_IS_NOT_EQUAL = 281;
    const T_IS_IDENTICAL = 282;
    const T_IS_NOT_IDENTICAL = 283;
    const T_IS_SMALLER_OR_EQUAL = 284;
    const T_IS_GREATER_OR_EQUAL = 285;
    const T_SL = 286;
    const T_SR = 287;
    const T_INSTANCEOF = 288;
    const T_INC = 289;
    const T_DEC = 290;
    const T_INT_CAST = 291;
    const T_DOUBLE_CAST = 292;
    const T_STRING_CAST = 293;
    const T_ARRAY_CAST = 294;
    const T_OBJECT_CAST = 295;
    const T_BOOL_CAST = 296;
    const T_UNSET_CAST = 297;
    const T_NEW = 298;
    const T_CLONE = 299;
    const T_EXIT = 300;
    const T_IF = 301;
    const T_ELSEIF = 302;
    const T_ELSE = 303;
    const T_ENDIF = 304;
    const T_LNUMBER = 305;
    const T_DNUMBER = 306;
    const T_STRING = 307;
    const T_STRING_VARNAME = 308;
    const T_VARIABLE = 309;
    const T_NUM_STRING = 310;
    const T_INLINE_HTML = 311;
    const T_CHARACTER = 312;
    const T_BAD_CHARACTER = 313;
    const T_ENCAPSED_AND_WHITESPACE = 314;
    const T_CONSTANT_ENCAPSED_STRING = 315;
    const T_ECHO = 316;
    const T_DO = 317;
    const T_WHILE = 318;
    const T_ENDWHILE = 319;
    const T_FOR = 320;
    const T_ENDFOR = 321;
    const T_FOREACH = 322;
    const T_ENDFOREACH = 323;
    const T_DECLARE = 324;
    const T_ENDDECLARE = 325;
    const T_AS = 326;
    const T_SWITCH = 327;
    const T_ENDSWITCH = 328;
    const T_CASE = 329;
    const T_DEFAULT = 330;
    const T_BREAK = 331;
    const T_CONTINUE = 332;
    const T_GOTO = 333;
    const T_FUNCTION = 334;
    const T_CONST = 335;
    const T_RETURN = 336;
    const T_TRY = 337;
    const T_CATCH = 338;
    const T_FINALLY = 339;
    const T_THROW = 340;
    const T_USE = 341;
    const T_INSTEADOF = 342;
    const T_GLOBAL = 343;
    const T_STATIC = 344;
    const T_ABSTRACT = 345;
    const T_FINAL = 346;
    const T_PRIVATE = 347;
    const T_PROTECTED = 348;
    const T_PUBLIC = 349;
    const T_VAR = 350;
    const T_UNSET = 351;
    const T_ISSET = 352;
    const T_EMPTY = 353;
    const T_HALT_COMPILER = 354;
    const T_CLASS = 355;
    const T_TRAIT = 356;
    const T_INTERFACE = 357;
    const T_EXTENDS = 358;
    const T_IMPLEMENTS = 359;
    const T_OBJECT_OPERATOR = 360;
    const T_DOUBLE_ARROW = 361;
    const T_LIST = 362;
    const T_ARRAY = 363;
    const T_CALLABLE = 364;
    const T_CLASS_C = 365;
    const T_TRAIT_C = 366;
    const T_METHOD_C = 367;
    const T_FUNC_C = 368;
    const T_LINE = 369;
    const T_FILE = 370;
    const T_COMMENT = 371;
    const T_DOC_COMMENT = 372;
    const T_OPEN_TAG = 373;
    const T_OPEN_TAG_WITH_ECHO = 374;
    const T_CLOSE_TAG = 375;
    const T_WHITESPACE = 376;
    const T_START_HEREDOC = 377;
    const T_END_HEREDOC = 378;
    const T_DOLLAR_OPEN_CURLY_BRACES = 379;
    const T_CURLY_OPEN = 380;
    const T_PAAMAYIM_NEKUDOTAYIM = 381;
    const T_NAMESPACE = 382;
    const T_NS_C = 383;
    const T_DIR = 384;
    const T_NS_SEPARATOR = 385;
    // }}}

    /* @var array Map of token ids to their respective names */
    protected static $terminals = array(
    "EOF",
    "error",
    "T_INCLUDE",
    "T_INCLUDE_ONCE",
    "T_EVAL",
    "T_REQUIRE",
    "T_REQUIRE_ONCE",
    "','",
    "T_LOGICAL_OR",
    "T_LOGICAL_XOR",
    "T_LOGICAL_AND",
    "T_PRINT",
    "T_YIELD",
    "'='",
    "T_PLUS_EQUAL",
    "T_MINUS_EQUAL",
    "T_MUL_EQUAL",
    "T_DIV_EQUAL",
    "T_CONCAT_EQUAL",
    "T_MOD_EQUAL",
    "T_AND_EQUAL",
    "T_OR_EQUAL",
    "T_XOR_EQUAL",
    "T_SL_EQUAL",
    "T_SR_EQUAL",
    "'?'",
    "':'",
    "T_BOOLEAN_OR",
    "T_BOOLEAN_AND",
    "'|'",
    "'^'",
    "'&'",
    "T_IS_EQUAL",
    "T_IS_NOT_EQUAL",
    "T_IS_IDENTICAL",
    "T_IS_NOT_IDENTICAL",
    "'<'",
    "T_IS_SMALLER_OR_EQUAL",
    "'>'",
    "T_IS_GREATER_OR_EQUAL",
    "T_SL",
    "T_SR",
    "'+'",
    "'-'",
    "'.'",
    "'*'",
    "'/'",
    "'%'",
    "'!'",
    "T_INSTANCEOF",
    "'~'",
    "T_INC",
    "T_DEC",
    "T_INT_CAST",
    "T_DOUBLE_CAST",
    "T_STRING_CAST",
    "T_ARRAY_CAST",
    "T_OBJECT_CAST",
    "T_BOOL_CAST",
    "T_UNSET_CAST",
    "'@'",
    "'['",
    "T_NEW",
    "T_CLONE",
    "T_EXIT",
    "T_IF",
    "T_ELSEIF",
    "T_ELSE",
    "T_ENDIF",
    "T_LNUMBER",
    "T_DNUMBER",
    "T_STRING",
    "T_STRING_VARNAME",
    "T_VARIABLE",
    "T_NUM_STRING",
    "T_INLINE_HTML",
    "T_ENCAPSED_AND_WHITESPACE",
    "T_CONSTANT_ENCAPSED_STRING",
    "T_ECHO",
    "T_DO",
    "T_WHILE",
    "T_ENDWHILE",
    "T_FOR",
    "T_ENDFOR",
    "T_FOREACH",
    "T_ENDFOREACH",
    "T_DECLARE",
    "T_ENDDECLARE",
    "T_AS",
    "T_SWITCH",
    "T_ENDSWITCH",
    "T_CASE",
    "T_DEFAULT",
    "T_BREAK",
    "T_CONTINUE",
    "T_GOTO",
    "T_FUNCTION",
    "T_CONST",
    "T_RETURN",
    "T_TRY",
    "T_CATCH",
    "T_FINALLY",
    "T_THROW",
    "T_USE",
    "T_INSTEADOF",
    "T_GLOBAL",
    "T_STATIC",
    "T_ABSTRACT",
    "T_FINAL",
    "T_PRIVATE",
    "T_PROTECTED",
    "T_PUBLIC",
    "T_VAR",
    "T_UNSET",
    "T_ISSET",
    "T_EMPTY",
    "T_HALT_COMPILER",
    "T_CLASS",
    "T_TRAIT",
    "T_INTERFACE",
    "T_EXTENDS",
    "T_IMPLEMENTS",
    "T_OBJECT_OPERATOR",
    "T_DOUBLE_ARROW",
    "T_LIST",
    "T_ARRAY",
    "T_CALLABLE",
    "T_CLASS_C",
    "T_TRAIT_C",
    "T_METHOD_C",
    "T_FUNC_C",
    "T_LINE",
    "T_FILE",
    "T_START_HEREDOC",
    "T_END_HEREDOC",
    "T_DOLLAR_OPEN_CURLY_BRACES",
    "T_CURLY_OPEN",
    "T_PAAMAYIM_NEKUDOTAYIM",
    "T_NAMESPACE",
    "T_NS_C",
    "T_DIR",
    "T_NS_SEPARATOR",
    "';'",
    "'{'",
    "'}'",
    "'('",
    "')'",
    "'$'",
    "'`'",
    "']'",
    "'\"'"
    , "???"
    );

    /* @var array Map which translates lexer tokens to internal tokens */
    protected static $translate = array(
    0,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,   48,  150,  151,  147,   47,   31,  151,
    145,  146,   45,   42,    7,   43,   44,   46,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,   26,  142,
    36,   13,   38,   25,   60,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,   61,  151,  149,   30,  151,  148,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  143,   29,  144,   50,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,  151,  151,  151,  151,
    151,  151,  151,  151,  151,  151,    1,    2,    3,    4,
    5,    6,    8,    9,   10,   11,   12,   14,   15,   16,
    17,   18,   19,   20,   21,   22,   23,   24,   27,   28,
    32,   33,   34,   35,   37,   39,   40,   41,   49,   51,
    52,   53,   54,   55,   56,   57,   58,   59,   62,   63,
    64,   65,   66,   67,   68,   69,   70,   71,   72,   73,
    74,   75,  151,  151,   76,   77,   78,   79,   80,   81,
    82,   83,   84,   85,   86,   87,   88,   89,   90,   91,
    92,   93,   94,   95,   96,   97,   98,   99,  100,  101,
    102,  103,  104,  105,  106,  107,  108,  109,  110,  111,
    112,  113,  114,  115,  116,  117,  118,  119,  120,  121,
    122,  123,  124,  125,  126,  127,  128,  129,  130,  131,
    132,  151,  151,  151,  151,  151,  151,  133,  134,  135,
    136,  137,  138,  139,  140,  141
    );

    protected static $yyaction = array(
    59,   60,  325,   61,   62,-32766,-32766,-32766,  324,   63,
    64,-32767,-32767,-32767,-32767,   98,   99,  100,  101,  102,
    57,  917,-32766,  298,-32766,-32766,   41,  106,  107,  108,
    109,  110,  111,  112,  113,  114,  115,  116,  267,  346,
    65,   66,  927,  249,  929,  928,   67,  535,   68,  220,
    221,   69,   70,   71,   72,   73,   74,   75,   76,   31,
    232,   77,  318,  326,  730,  732,  462,  836,  837,  362,
    348,  895,  238,  578,  280,  363,   46,   27,  327,  859,
    364,  246,  365,  454,  366,   39,  223,  328,-32766,-32766,
    -32766,   36,   37,  367,  333,  360,   38,  368,  329,  423,
    78,  848,  122,  278,  279,-32766,  286,-32766,   35,  369,
    370,  371,  372,  373,  389,  343,  861,  330,  560,  602,
    374,  375,  376,  377,  848,  842,  843,  844,  845,  839,
    840,  239,   82,   83,   84, -350,  389,  846,  841,  330,
    584,  504,  126,   47,  227,  259,  244,  802,  248,   40,
    351,   85,   86,   87,   88,   89,   90,   91,   92,   93,
    94,   95,   96,   97,   98,   99,  100,  101,  102,  103,
    104,  105,  788,  233,  576,-32766,-32766,-32766,  701,  702,
    703,  700,  699,  698,  630,    0,-32766,-32766,-32766,  655,
    656,  216,-32766,  215,-32766,-32766,-32766,-32766,-32766,-32767,
    -32767,-32767,-32767,-32766,  788,  322,  329,  319,  899,  544,
    -117,  257,  128,  277,-32766,-32766,-32766,  369,  370,  889,
    693,  261,  895,  225,  226,-32766,  540,  602,  374,  375,
    675,  535,  344,-32766,  535,-32766,  895,  376,-32766,-32766,
    -32766,  575,-32766,   53,-32766,  322,-32766,  658,  263,-32766,
    187,  257,  600,-32766,-32766,-32766,  788,-32766,-32766,-32766,
    693,   34,-32766,  535,  350,-32766,  388,-32766,  860,  812,
    -32766,-32766,-32766,-32766,-32766,  222,-32766,   54,-32766,   56,
    127,-32766,  100,  101,  102,-32766,-32766,-32766,  788,   22,
    -32766,-32766,  601,  268,-32766,  924,  259,-32766,  388,  666,
    631,  389,-32766,-32766,  330,-32766,  322,  224,  334,-32766,
    259,  917,  257,  503,  861,  535,  103,  104,  105,-32766,
    233,  693,-32766,-32766,-32766,  118,-32766,  494,-32766,  340,
    -32766,  506,  902,-32766,-32766,-32766,  126,-32766,-32766,-32766,
    345,-32766,-32766,-32766,  213,  123,-32766,  535,  130,-32766,
    388,-32766,  452,  599,-32766,-32766,-32766,-32766,-32766,  119,
    -32766,  120,-32766,  788,  233,-32766,  189, -113,  190,-32766,
    -32766,-32766,  194,  217,-32766,-32766,  195,  125,-32766,-32766,
    -32766,-32766,  388,  188,  685,  858,-32766,-32766,  117,-32766,
    329,  319,  353,   28,  509,  788,  597,  277,  357,  468,
    680,  369,  370,  516,-32766,-32766,-32766,  131,  287,   49,
    540,  602,  374,  375,  477,  478,-32766,  520,-32766,-32766,
    528,-32766,  535,-32766,-32766,-32766,-32766,  655,  656,-32766,
    -32766,-32766,  263,-32766,  519,-32766,  507,-32766,  542,  129,
    -32766,  679,  525,  588,-32766,-32766,-32766,  526,-32766,-32766,
    -32766,  690,  530,-32766,  535,  306,-32766,  388,-32766,  541,
    511,-32766,-32766,-32766,-32766,-32766,  224,-32766,   50,-32766,
    58,  482,-32766,   55,  805,   51,-32766,-32766,-32766,  788,
    52,-32766,-32766,  416,  232,-32766,  502,  687,-32766,  388,
    445,  491,  229,-32766,-32766,  551,-32766,  922,  549,  415,
    -32766,  339,  341,  535,  536,  399,  535,  400,  402,  414,
    -32766, -158,  401,-32766,-32766,-32766,  493,-32766,  479,-32766,
    475,-32766, -161,  604,-32766,-32766,-32766,  265,-32766,-32766,
    -32766,  788,-32766,-32766,-32766,  266,  917,-32766,  535,  256,
    -32766,  388,-32766,  342,  212,-32766,-32766,-32766,-32766,-32766,
    338,-32766,  471,-32766,  457,  473,-32766,  359,  603,  258,
    -32766,-32766,-32766,  788,  255,-32766,-32766,  577,  260,-32766,
    376,  579,-32766,  388,  847,  247,    0,-32766,-32766, -350,
    -32766,  657,    0,  337,-32766,    0,    0, -351,  245,    0,
    535,  121,  193,   42,-32766, -282,  791,-32766,-32766,-32766,
    0,-32766,    0,-32766,    0,-32766,    0,    0,-32766,  570,
    -32766, -290,-32766,-32766,-32766,  788,-32766,-32766,-32766, -291,
    499,-32766,  535,  300,-32766,  388,-32766,  288,  251,-32766,
    -32766,-32766,-32766,-32766,  242,-32766,  407,-32766,  684,  340,
    -32766,  686,  614,  616,-32766,-32766,-32766,  618,  563,-32766,
    -32766,  625,  624,-32766,  633,  580,-32766,  388,  565,  587,
    574,  572,-32766,  513,-32766,  512,   45,   44,-32766,  569,
    571,  573,  586,  545,  535,  683,  676,  234,-32766,  510,
    515,-32766,-32766,-32766,  517,-32766,  522,-32766,   81,-32766,
    124,  523,-32766,-32766,-32766,  524,-32766,-32766,-32766,  527,
    -32766,-32766,-32766,  505,  529,-32766,  535,  890,-32766,  388,
    -32766,  900,  668,-32766,-32766,-32766,-32766,-32766,  827,-32766,
    892,-32766,  880,  894,-32766,  191,  192,  896,-32766,-32766,
    -32766,  923,  356,-32766,-32766,  623,  926,-32766,  622,  925,
    -32766,  388,   32,   33,  185,  568,-32766,  321,-32766,  317,
    43,  262,  836,  837,  237,-32766,-32766,  236,   48,-32766,
    838,  535,  235,   30,  219,-32766,  218,  214,-32766,-32766,
    -32766,  186,-32766,   80,-32766,   79,-32766,-32766,-32766,-32766,
    768,  829,  767,-32766,-32766,-32766,  446, -114,-32766,-32766,
    854,  659,-32766,  795,  792,-32766,  388,  498,  472,  437,
    358,  354,  307,-32766,  289,   25,   24,   23,  442, -113,
    842,  843,  844,  845,  839,  840,  309,  786,    0,  480,
    874,  855,  846,  841,  329,  319,  921,  826,-32766,  329,
    -32766,  277,-32766,-32766,  891,  369,  370,-32766,-32766,-32766,
    369,  370,  875,  879,  540,  602,  374,  375,  893,  560,
    602,  374,  375,  329,-32766,  811,-32766,-32766,-32766,-32766,
    -32766,  799,  797,  798,  369,  370,  263,  329,  796,    0,
    0,  329,  543,  560,  602,  374,  375,  598,  369,  370,
    0,    0,  369,  370,  329,    0,    0,  560,  602,  374,
    375,  560,  602,  374,  375,  369,  370,    0,    0,    0,
    329,  691,    0,    0,  560,  602,  374,  375,    0,    0,
    0,  369,  370,  329,    0,  790,    0,  329,  501,  591,
    560,  602,  374,  375,  369,  370,    0,    0,  369,  370,
    0,  329,  593,  560,  602,  374,  375,  560,  602,  374,
    375,    0,  369,  370,  492,    0,    0,    0,  514,    0,
    486,  560,  602,  374,  375,  329,    0,    0,    0,  329,
    0,  561,    0,    0,    0,  789,  369,  370,    0,    0,
    369,  370,-32766,-32766,-32766,  560,  602,  374,  375,  560,
    602,  374,  375,    0,  329,    0,    0,    0,    0,-32766,
    0,-32766,-32766,-32766,-32766,  369,  370,    0,    0,    0,
    0,    0,    0,    0,  560,  602,  374,  375
    );

    protected static $yycheck = array(
    2,    3,    4,    5,    6,    8,    9,   10,    7,   11,
    12,   36,   37,   38,   39,   40,   41,   42,   43,   44,
    61,   76,   25,   73,   27,   28,   13,   14,   15,   16,
    17,   18,   19,   20,   21,   22,   23,   24,   61,    7,
    42,   43,   71,   76,   73,   74,   48,   71,   50,   51,
    52,   53,   54,   55,   56,   57,   58,   59,   60,   61,
    62,   63,   64,   65,   51,   52,   76,   69,   70,   71,
    71,   73,    7,   75,    7,   77,   78,   79,   80,  134,
    82,  122,   84,   81,   86,  135,  136,   89,    8,    9,
    10,   93,   94,   95,   96,    7,   98,   99,   96,  122,
    102,  134,  143,  105,  106,   25,    7,   27,    7,  107,
    108,  113,  114,  115,  138,   26,  117,  141,  116,  117,
    118,  119,  124,  125,  134,  127,  128,  129,  130,  131,
    132,  133,    8,    9,   10,  122,  138,  139,  140,  141,
    142,  143,  143,  145,   31,  147,  148,  146,  150,   25,
    7,   27,   28,   29,   30,   31,   32,   33,   34,   35,
    36,   37,   38,   39,   40,   41,   42,   43,   44,   45,
    46,   47,   12,   49,  142,    8,    9,   10,  106,  107,
    108,  109,  110,  111,   26,    0,    8,    9,   10,  125,
    126,   31,   25,    7,   27,   28,   29,   30,   31,   32,
    33,   34,   35,   25,   12,   97,   96,   97,   71,  142,
    146,  103,   61,  103,    8,    9,   10,  107,  108,   73,
    112,    7,   73,   31,    7,   65,  116,  117,  118,  119,
    142,   71,  143,    8,   71,   75,   73,  124,   78,   79,
    80,  142,   82,   61,   84,   97,   86,  146,  138,   89,
    7,  103,  144,   93,   94,   95,   12,   65,   98,   99,
    112,    7,  102,   71,   71,  105,  106,   75,   71,  106,
    78,   79,   80,  113,   82,   31,   84,   61,   86,   61,
    143,   89,   42,   43,   44,   93,   94,   95,   12,  146,
    98,   99,  144,  147,  102,  144,  147,  105,  106,   73,
    142,  138,  142,  143,  141,  113,   97,   31,  145,   65,
    147,   76,  103,   71,  117,   71,   45,   46,   47,   75,
    49,  112,   78,   79,   80,  143,   82,   71,   84,  141,
    86,  143,  146,   89,  142,  143,  143,   93,   94,   95,
    7,   65,   98,   99,  123,    7,  102,   71,  143,  105,
    106,   75,  147,  144,   78,   79,   80,  113,   82,  143,
    84,  143,   86,   12,   49,   89,   13,  146,   13,   93,
    94,   95,   13,  147,   98,   99,   13,   26,  102,    8,
    9,  105,  106,   13,  142,  150,  142,  143,   13,  113,
    96,   97,   66,   67,   26,   12,   31,  103,   66,   67,
    144,  107,  108,   26,    8,    9,   10,   91,   92,   61,
    116,  117,  118,  119,  100,  101,   65,   26,  142,  143,
    26,   25,   71,   27,   28,   29,   75,  125,  126,   78,
    79,   80,  138,   82,   26,   84,   26,   86,  144,   26,
    89,  142,  143,   26,   93,   94,   95,   26,   65,   98,
    99,  142,  143,  102,   71,   72,  105,  106,   75,  142,
    143,   78,   79,   80,  113,   82,   31,   84,   61,   86,
    61,   68,   89,   61,   73,   61,   93,   94,   95,   12,
    61,   98,   99,   88,   62,  102,   71,   71,  105,  106,
    88,   71,   88,  142,  143,   71,  113,   71,   71,   71,
    65,   71,   71,   71,   71,   71,   71,   71,   71,   71,
    75,   88,   73,   78,   79,   80,   73,   82,   73,   84,
    73,   86,   73,  117,   89,  142,  143,   76,   93,   94,
    95,   12,   65,   98,   99,   76,   76,  102,   71,  121,
    105,  106,   75,   80,   88,   78,   79,   80,  113,   82,
    96,   84,   90,   86,   90,  103,   89,   96,  117,  104,
    93,   94,   95,   12,  120,   98,   99,  142,  120,  102,
    124,  142,  105,  106,  134,  122,   -1,  142,  143,  122,
    113,  146,   -1,  141,   65,   -1,   -1,  122,  122,   -1,
    71,  123,  123,  123,   75,  137,  146,   78,   79,   80,
    -1,   82,   -1,   84,   -1,   86,   -1,   -1,   89,  142,
    143,  137,   93,   94,   95,   12,   65,   98,   99,  137,
    137,  102,   71,  137,  105,  106,   75,  137,  137,   78,
    79,   80,  113,   82,  137,   84,  141,   86,  142,  141,
    89,  142,  142,  142,   93,   94,   95,  142,  142,   98,
    99,  142,  142,  102,  142,  142,  105,  106,  142,  142,
    142,  142,  143,  142,  113,  142,  142,  142,   65,  142,
    142,  142,  142,  142,   71,  142,  142,  145,   75,  143,
    143,   78,   79,   80,  143,   82,  143,   84,  143,   86,
    143,  143,   89,  142,  143,  143,   93,   94,   95,  143,
    65,   98,   99,  143,  143,  102,   71,  144,  105,  106,
    75,  144,  144,   78,   79,   80,  113,   82,  144,   84,
    144,   86,  144,  144,   89,   42,   43,  144,   93,   94,
    95,  144,  144,   98,   99,  144,  144,  102,  144,  144,
    105,  106,  145,  145,   61,  142,  143,  145,  113,  145,
    145,  145,   69,   70,  145,   65,   73,  145,  145,  145,
    77,   71,  145,  145,  145,   75,  145,  145,   78,   79,
    80,  145,   82,  145,   84,  145,   86,  142,  143,   89,
    146,  146,  146,   93,   94,   95,  146,  146,   98,   99,
    146,  146,  102,  146,  146,  105,  106,  146,  146,  146,
    146,  146,  146,  113,  146,  146,  146,  146,  125,  146,
    127,  128,  129,  130,  131,  132,  133,  148,   -1,  149,
    149,  149,  139,  140,   96,   97,  149,  149,  145,   96,
    147,  103,  142,  143,  149,  107,  108,    8,    9,   10,
    107,  108,  149,  149,  116,  117,  118,  119,  149,  116,
    117,  118,  119,   96,   25,  149,   27,   28,   29,   30,
    31,  149,  149,  149,  107,  108,  138,   96,  149,   -1,
    -1,   96,  144,  116,  117,  118,  119,  144,  107,  108,
    -1,   -1,  107,  108,   96,   -1,   -1,  116,  117,  118,
    119,  116,  117,  118,  119,  107,  108,   -1,   -1,   -1,
    96,  144,   -1,   -1,  116,  117,  118,  119,   -1,   -1,
    -1,  107,  108,   96,   -1,  144,   -1,   96,   83,  144,
    116,  117,  118,  119,  107,  108,   -1,   -1,  107,  108,
    -1,   96,  144,  116,  117,  118,  119,  116,  117,  118,
    119,   -1,  107,  108,   85,   -1,   -1,   -1,  144,   -1,
    87,  116,  117,  118,  119,   96,   -1,   -1,   -1,   96,
    -1,  144,   -1,   -1,   -1,  144,  107,  108,   -1,   -1,
    107,  108,    8,    9,   10,  116,  117,  118,  119,  116,
    117,  118,  119,   -1,   96,   -1,   -1,   -1,   -1,   25,
    -1,   27,   28,   29,   30,  107,  108,   -1,   -1,   -1,
    -1,   -1,   -1,   -1,  116,  117,  118,  119
    );

    protected static $yybase = array(
    0,  728,  294,  110,  817,  804,    2,  863,  859,  733,
    821,  788,  771,  835,  775,  757,  888,  888,  888,  888,
    888,  368,  377,  391,  394,  391,  410,   -2,   -2,   -2,
    435,  244,  244,  635,  244,  276,  603,  467,  519,  383,
    351,  160,  192,  551,  551,  551,  551,  690,  690,  551,
    551,  551,  551,  551,  551,  551,  551,  551,  551,  551,
    551,  551,  551,  551,  551,  551,  551,  551,  551,  551,
    551,  551,  551,  551,  551,  551,  551,  551,  551,  551,
    551,  551,  551,  551,  551,  551,  551,  551,  551,  551,
    551,  551,  551,  551,  551,  551,  551,  551,  551,  551,
    551,  551,  551,  551,  551,  551,  551,  551,  551,  551,
    551,  551,  551,  551,  551,  551,  551,  551,  551,  551,
    551,  551,  551,  551,  551,  551,  551,  551,  551,  551,
    551,  551,  158,  429,  468,  470,  527,  528,  529,  530,
    450,  456,  634,  587,  583,  413,  579,  578,  576,  574,
    568,  588,  567,  670,  563,  124,  124,  124,  124,  124,
    124,  124,  124,  124,  124,  225,  371,  206,  206,  206,
    206,  206,  206,  206,  206,  206,  206,  206,  206,  206,
    206,  206,  178,  178,   80,  683,  683,  683,  683,  683,
    683,  683,  683,  683,  683,  683,   -3,  396,  964,  829,
    167,  167,  167,  167,   13,  -25,  -25,  -25,  -25,  148,
    108,  209,  113,  113,  446,  446,  422,  547,  163,  163,
    163,  163,  163,  163,  163,  163,  163,  163,  449,  415,
    240,  240,  614,  614,   64,   64,   64,   64,  302,  -33,
    -55,  235,   -1,  256,  451,  137,  137,  137,  459,  440,
    460,  193,  271,  271,  271,  -24,  -24,  -24,  -24,  545,
    -24,  -24,  -24,  188,  216,  -50,  -50,  -29,  205,  464,
    594,  462,  591,  299,  482,  -41,  317,  442,  226,  454,
    442,  326,  332,  314,  458,   89,  226,  158,  197,  309,
    218,  425,  428,  531,  395,   67,   99,   32,  -23,  182,
    146,  143,  402,  640,  636,  186,  151,  465,  101,  -10,
    182,  221,  534,   88,    1,  533,  242,  365,  598,  436,
    618,  438,  436,  445,  365,  613,  613,  613,  613,  365,
    432,  618,  618,  365,  422,  618,  254,  432,  365,  444,
    432,  448,  613,  523,  521,  436,  439,  418,  618,  618,
    618,  438,  365,  613,  452,  243,  618,  613,  452,  365,
    445,  185,  417,  348,  605,  630,  602,  434,  560,  441,
    406,  621,  619,  628,  437,  430,  622,  597,  495,  518,
    431,  375,  407,  414,  419,  497,  412,  466,  454,  498,
    315,  457,  491,  457,  719,  486,  474,  453,  463,  517,
    370,  353,  536,  495,  648,  656,  669,  433,  532,  653,
    457,  714,  525,  338,  355,  617,  427,  457,  612,  457,
    537,  457,  647,  426,  592,  495,  315,  315,  315,  645,
    713,  712,  706,  699,  694,  693,  685,  409,  678,  516,
    655,   65,  626,  458,  490,  424,  513,  214,  677,  457,
    457,  541,  545,  457,  512,  524,  661,  510,  652,  447,
    469,  672,  440,  654,  457,  461,  671,  214,  408,  403,
    641,  509,  543,  604,  548,  359,  644,  606,  552,  363,
    595,  421,  506,  660,  659,  663,  505,  556,  420,  401,
    443,  609,  501,  651,  423,  483,  455,  404,  561,  416,
    658,  500,  499,  496,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,    0,    0,
    0,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
    -2,   -2,   -2,  124,  124,  124,  124,  124,  124,  124,
    124,  124,  124,  124,  124,  124,  124,  124,  124,  124,
    124,  124,  124,  124,  124,  124,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,  124,  124,  124,  124,
    124,  124,  124,  124,  124,  124,  124,  124,  124,  124,
    124,  124,  124,  124,  124,  124,  163,  163,  163,  163,
    163,  163,  163,  163,  163,  163,  163,  124,  124,  124,
    124,  124,  124,  124,  124,    0,  271,  271,  271,  271,
    72,   72,   72,  163,  163,  163,  163,  163,  163,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,   72,
    72,  271,  271,  163,  163,  -24,  -24,  -24,  -24,  -24,
    -50,  -50,  -50,  146,  -24,  -50,  149,  149,  149,  -50,
    -50,  -50,  146,    0,    0,    0,    0,    0,    0,    0,
    149,    0,    0,    0,  432,  618,    0,    0,    0,  149,
    316,  316,  316,  316,  214,  182,    0,  495,  432,    0,
    439,  432,    0,    0,    0,  618,    0,    0,    0,    0,
    0,    0,  338,  532,  333,  495,    0,    0,    0,    0,
    0,    0,    0,  495,  217,  217,    0,    0,  409,    0,
    0,    0,    0,  333,    0,    0,  214
    );

    protected static $yydefault = array(
    3,32767,32767,    1,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,  106,   98,  112,   97,
    108,32767,32767,32767,32767,32767,32767,32767,32767,32767,
    32767,  377,  377,32767,  334,32767,32767,32767,32767,32767,
    32767,32767,32767,  179,  179,  179,32767,32767,32767,  366,
    366,  366,  366,  366,  366,  366,  366,  366,  366,32767,
    32767,32767,32767,32767,  257,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,  262,  382,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,  238,  239,  241,  242,  178,
    367,  131,  263,  381,  177,  205,  207,  256,  206,  183,
    188,  189,  190,  191,  192,  193,  194,  195,  196,  197,
    198,  182,  235,  234,  203,  331,  331,  334,32767,32767,
    32767,32767,32767,32767,32767,32767,  204,  208,  210,  209,
    225,  226,  223,  224,  181,  227,  228,  229,  230,  163,
    163,  163,32767,32767,  376,  376,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,  164,32767,
    217,  218,  292,  292,  122,  122,  122,  122,  122,32767,
    32767,32767,32767,32767,  300,32767,32767,32767,32767,32767,
    302,32767,  212,  213,  211,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,  339,  301,32767,32767,32767,32767,
    32767,32767,32767,32767,  352,  288,32767,32767,32767,  281,
    32767,  109,  111,   61,  318,32767,32767,32767,32767,32767,
    357,32767,32767,32767,   17,32767,32767,32767,  389,  352,
    32767,32767,   19,32767,32767,32767,32767,  233,32767,32767,
    356,  350,32767,32767,32767,32767,32767,   65,  297,32767,
    303,32767,32767,32767,   65,32767,32767,32767,32767,   65,
    32767,  355,  354,   65,32767,  282,  333,32767,   65,   76,
    32767,   74,32767,   95,   95,32767,32767,   78,  329,  345,
    32767,32767,   65,32767,  270,  333,32767,32767,  270,   65,
    32767,32767,    4,  307,32767,32767,32767,32767,32767,32767,
    32767,32767,32767,32767,32767,32767,32767,32767,  283,32767,
    32767,32767,  253,  254,  341,32767,  342,32767,  281,32767,
    221,  200,32767,  202,32767,32767,  286,  289,32767,32767,
    32767,  140,32767,  284,32767,  186,32767,32767,32767,32767,
    384,32767,32767,  180,32767,32767,32767,  136,32767,   63,
    32767,  374,32767,32767,  350,  285,  214,  215,  216,32767,
    32767,32767,32767,32767,32767,32767,32767,  351,32767,32767,
    32767,  116,32767,  318,32767,32767,32767,   77,32767,  184,
    132,32767,32767,  383,32767,32767,32767,32767,32767,32767,
    338,32767,32767,32767,   64,32767,32767,   79,32767,32767,
    350,32767,32767,32767,32767,  120,32767,32767,32767,  175,
    32767,32767,32767,32767,32767,  350,32767,32767,32767,32767,
    32767,32767,32767,32767,    4,32767,  157,32767,32767,32767,
    32767,32767,32767,32767,   25,   25,    3,   25,  103,   25,
    143,    3,   95,   95,   58,  143,   25,  143,   25,   25,
    25,   25,   25,   25,   25,  150,   25,   25,   25,   25,
    25
    );

    protected static $yygoto = array(
    161,  135,  135,  140,  135,  161,  136,  137,  138,  143,
    145,  169,  163,  159,  159,  159,  159,  140,  140,  160,
    160,  160,  160,  160,  160,  160,  160,  160,  160,  155,
    156,  157,  158,  167,  134,  750,  751,  390,  753,  774,
    775,  776,  777,  778,  779,  780,  782,  718,  139,  141,
    142,  144,  165,  166,  168,  184,  196,  197,  198,  199,
    200,  201,  202,  203,  205,  206,  207,  208,  230,  231,
    252,  253,  254,  426,  427,  428,  170,  171,  172,  173,
    174,  175,  176,  177,  178,  179,  180,  181,  146,  147,
    148,  162,  149,  164,  150,  182,  151,  152,  153,  183,
    154,  132,  443,  443,  443,  443,  443,  443,  443,  443,
    443,  443,  443,  311,  485,  421,  421,  449,  417,  419,
    419,  391,  393,  410,  424,  450,  453,  464,  470,  335,
    335,  335,  335,  335,  335,  335,  335,  335,  335,  335,
    335,  335,  335,  335,  335,  646,  646,  906,  906,  813,
    813,  654,  654,  654,  654,  654,  405,  538,  538,  538,
    495,  444,  444,  444,  444,  444,  444,  444,  444,  444,
    444,  444,  611,  611,  611,  611,  270,  606,  612,  490,
    392,  392,  392,  392,  392,  392,  392,  392,  392,  392,
    392,  392,  392,  392,  392,  392,  539,  539,  539,  582,
    395,  395,    5,  878,   16,  210,    6,  211,  396,  396,
    537,  537,  537,    7,  422,   17,   18,    8,   19,    9,
    10,   11,  910,   20,   12,   13,   14,   15,  455,  483,
    632,  617,  615,  613,  615,  508,  398,  641,  636,  850,
    850,  850,  850,  850,  850,  850,  850,  850,  850,  850,
    430,  431,  432,  433,  434,  435,  436,  438,  466,  835,
    458,  463,  500,  467,  273,  315,  830,    1,  697,  316,
    809,  810,    2,  771,   26,   21,  285,  554,  672,  621,
    852,  853,  868,  652,  707,  276,  661,  807,  877,  807,
    439,  291,  250,  885,  885,  808,  241,  886,  886,  294,
    476,   29,  294,  916,  916,  481,  901,  901,  901,  866,
    292,  484,  919,  916,  408,  903,  299,  299,  299,  418,
    884,  304,  397,  397,  429,  716,  762,  404,  919,  919,
    299,  825,  824,  459,  650,  546,  664,  851,  518,  310,
    488,  404,  404,  312,  271,  272,  552,  804,  669,  620,
    863,  487,  403,    0,  705,    0,    0,    0,    0,  302,
    0,    0,  425,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,    0,  409
    );

    protected static $yygcheck = array(
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   38,   38,   38,   38,   38,   38,   38,   38,
    38,   38,   38,   32,   32,   32,   32,   32,   32,   32,
    32,   32,   32,   32,   32,   32,   32,   32,   32,   38,
    38,   38,   38,   38,   38,   38,   38,   38,   38,   38,
    38,   38,   38,   38,   38,   53,   53,   53,   53,   38,
    38,   38,   38,   38,   38,   38,   75,    6,    6,    6,
    38,   92,   92,   92,   92,   92,   92,   92,   92,   92,
    92,   92,   38,   38,   38,   38,   48,   38,   38,   38,
    89,   89,   89,   89,   89,   89,   89,   89,   89,   89,
    89,   89,   89,   89,   89,   89,    7,    7,    7,   31,
    89,   89,   13,   57,   13,   44,   13,   44,   92,   92,
    5,    5,    5,   13,   83,   13,   13,   13,   13,   13,
    13,   13,  112,   13,   13,   13,   13,   13,   21,   21,
    5,    5,    5,    5,    5,    5,    5,    5,    5,   99,
    99,   99,   99,   99,   99,   99,   99,   99,   99,   99,
    84,   84,   84,   84,   84,   84,   84,   84,   84,   57,
    40,   40,   40,   46,   46,   46,   15,    2,   72,   72,
    57,   57,    2,   15,   15,   15,   15,   12,   12,   12,
    12,   12,   12,   12,   12,    4,   59,   57,   57,   57,
    15,   28,   98,   91,   91,   57,   98,   90,   90,    4,
    101,   15,    4,  113,  113,   15,   91,   91,   91,  104,
    39,   30,  113,  113,   39,  110,   96,   96,   96,   39,
    91,   29,   95,   95,   25,   75,   76,   25,  113,  113,
    96,   97,   97,   39,   55,   10,   60,  100,   50,   96,
    39,   25,   25,    9,   48,   48,   11,   87,   61,   47,
    103,   82,    4,   -1,   74,   -1,   -1,   -1,   -1,    4,
    -1,   -1,    4,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
    -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
    -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
    -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
    -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
    -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
    -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
    -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
    -1,   -1,   -1,   75
    );

    protected static $yygbase = array(
    0,    0, -239,    0,   22,  209,  156,  195,    0,   21,
    55,    1,   89, -303,    0,  -52,    0,    0,    0,    0,
    0,  184,    0,    0,  -30,  294,    0,    0,  245,  102,
    98,  174,  -99,    0,    0,    0,    0,    0,  -83,  -19,
    25,    0,    0,    0, -310,    0,    7,   -2, -168,    0,
    51,    0,    0,  -67,    0,   96,    0,  -61,    0,  251,
    50,    2,    0,    0,    0,    0,    0,    0,    0,    0,
    0,    0,   40,    0,   -6,  109,   93,    0,    0,    0,
    0,    0,   -7,  182,  200,    0,    0,   23,    0,  -32,
    65,   61,  -24,    0,    0,   90,   71,   85,   48,   54,
    49,  114,    0,   -5,  122,    0,    0,    0,    0,    0,
    100,    0,  188,   63,    0
    );

    protected static $yygdefault = array(
    -32768,  361,    3,  533,  378,  557,  558,  559,  295,  293,
    547,  553,  460,    4,  555,  763,  281,  562,  282,  469,
    564,  412,  566,  567,  133,  379,  296,  297,  413,  303,
    456,  581,  204,  301,  583,  283,  585,  590,  284,  489,
    440,  380,  347,  451,  209,  420,  447,  619,  269,  627,
    521,  635,  638,  381,  441,  649,  352,  806,  308,  660,
    665,  670,  673,  323,  313,  465,  677,  678,  243,  682,
    496,  497,  696,  228,  704,  717,  320,  781,  783,  382,
    383,  406,  474,  394,  411,  800,  314,  803,  384,  385,
    331,  332,  821,  818,  275,  871,  274,  349,  240,  856,
    857,  461,  355,  909,  867,  264,  386,  387,  290,  305,
    904,  336,  911,  918,  448
    );

    protected static $yylhs = array(
    0,    1,    2,    2,    4,    4,    3,    3,    3,    3,
    3,    3,    3,    3,    3,    8,    8,   10,   10,   10,
    10,    9,    9,   11,   13,   13,   14,   14,   14,   14,
    5,    5,    5,    5,    5,    5,    5,    5,    5,    5,
    5,    5,    5,    5,    5,    5,    5,    5,    5,    5,
    5,    5,    5,    5,    5,    5,    5,    5,   35,   35,
    37,   36,   36,   29,   29,   39,   39,    6,    7,    7,
    7,   41,   41,   41,   42,   42,   45,   45,   43,   43,
    46,   46,   22,   22,   31,   31,   34,   34,   33,   33,
    47,   23,   23,   23,   23,   48,   48,   49,   49,   50,
    50,   20,   20,   16,   16,   51,   18,   18,   52,   17,
    17,   19,   19,   30,   30,   30,   40,   40,   54,   54,
    55,   55,   56,   56,   56,   56,   57,   57,   57,   58,
    58,   59,   59,   26,   26,   60,   60,   60,   27,   27,
    61,   61,   44,   44,   62,   62,   62,   62,   67,   67,
    68,   68,   69,   69,   69,   69,   70,   71,   71,   66,
    66,   63,   63,   65,   65,   73,   73,   72,   72,   72,
    72,   72,   72,   64,   64,   74,   74,   28,   28,   21,
    21,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    24,   24,   24,   24,   24,   24,   24,   24,   24,   24,
    15,   15,   25,   25,   79,   79,   80,   80,   80,   75,
    82,   82,   86,   86,   87,   88,   88,   88,   88,   88,
    88,   92,   92,   38,   38,   38,   76,   76,   93,   93,
    89,   89,   94,   94,   94,   94,   94,   77,   77,   77,
    81,   81,   81,   85,   85,   99,   99,   99,   99,   99,
    99,   99,   99,   99,   99,   99,   99,   99,   99,   12,
    12,   12,   12,   12,   12,   78,   78,   78,   78,  100,
    100,  101,  101,  103,  103,  102,  102,  104,  104,   32,
    32,   32,   32,  106,  106,  105,  105,  105,  105,  105,
    107,  107,   91,   91,   95,   95,   90,   90,  108,  108,
    108,  108,   96,   96,   96,   96,   84,   84,   97,   97,
    97,   53,  109,  109,  110,  110,  110,   83,   83,  111,
    111,  112,  112,  112,  112,   98,   98,   98,   98,  113,
    113,  113,  113,  113,  113,  113,  114,  114,  114
    );

    protected static $yylen = array(
    1,    1,    2,    0,    1,    3,    1,    1,    1,    1,
    3,    5,    4,    3,    3,    3,    1,    1,    3,    2,
    4,    3,    1,    3,    2,    0,    1,    1,    1,    1,
    3,    5,    8,    3,    5,    9,    3,    2,    3,    2,
    3,    2,    3,    2,    3,    3,    3,    1,    2,    5,
    7,    9,    5,    1,    6,    3,    3,    2,    0,    2,
    8,    0,    4,    1,    3,    0,    1,    9,    7,    6,
    5,    1,    2,    2,    0,    2,    0,    2,    0,    2,
    1,    3,    1,    4,    1,    4,    1,    4,    1,    3,
    3,    3,    4,    4,    5,    0,    2,    4,    3,    1,
    1,    1,    4,    0,    2,    3,    0,    2,    4,    0,
    2,    0,    3,    1,    2,    1,    1,    0,    1,    3,
    3,    5,    0,    1,    1,    1,    2,    3,    3,    1,
    3,    1,    2,    3,    1,    1,    2,    4,    3,    1,
    1,    3,    2,    0,    3,    3,    8,    3,    1,    3,
    0,    2,    4,    5,    4,    4,    3,    1,    1,    1,
    3,    1,    1,    0,    1,    1,    2,    1,    1,    1,
    1,    1,    1,    1,    3,    1,    3,    3,    1,    0,
    1,    1,    3,    3,    4,    4,    1,    2,    3,    3,
    3,    3,    3,    3,    3,    3,    3,    3,    3,    2,
    2,    2,    2,    3,    3,    3,    3,    3,    3,    3,
    3,    3,    3,    3,    3,    3,    3,    3,    3,    2,
    2,    2,    2,    3,    3,    3,    3,    3,    3,    3,
    3,    3,    1,    3,    5,    4,    4,    4,    2,    2,
    2,    2,    2,    2,    2,    2,    2,    2,    2,    2,
    2,    2,    1,    1,    1,    3,    2,    1,    9,   10,
    3,    3,    2,    4,    4,    3,    4,    4,    4,    3,
    0,    4,    1,    3,    2,    2,    4,    6,    2,    2,
    4,    1,    1,    1,    2,    3,    1,    1,    1,    1,
    1,    1,    0,    3,    3,    4,    4,    0,    2,    1,
    0,    1,    1,    0,    1,    1,    1,    1,    1,    1,
    1,    1,    1,    1,    1,    1,    3,    2,    1,    1,
    3,    2,    2,    4,    3,    1,    3,    3,    3,    1,
    1,    0,    2,    0,    1,    3,    1,    3,    1,    1,
    1,    1,    1,    6,    4,    3,    4,    2,    4,    4,
    1,    3,    1,    2,    1,    1,    4,    1,    3,    6,
    4,    4,    4,    4,    1,    4,    0,    1,    1,    3,
    1,    4,    3,    1,    1,    1,    0,    0,    2,    3,
    1,    3,    1,    4,    2,    2,    2,    1,    2,    1,
    4,    3,    3,    3,    6,    3,    1,    1,    1
    );

    protected $yyval;
    protected $yyastk;
    protected $stackPos;
    protected $lexer;
    protected $errMsg;
    private $tokens;
    private $tokensSkip = array(T_WHITESPACE,T_COMMENT,T_DOC_COMMENT,T_ENCAPSED_AND_WHITESPACE);
    private $tokensVariable = array('{','}');

    /**
     * Creates a parser instance.
     *
     * @param PHPParser_Lexer $lexer A lexer
    */
    public function __construct(Pecker_Lexer $lexer) {
        $this->lexer = $lexer;
        $this->tokens = array();
    }

    /**
     * Parses PHP code into a node tree.
     *
     * @param string $code The source code to parse
     *
     * @return PHPParser_Node[] Array of statements
     */
    public function parse($code) {
        $bLexed = $this->lexer->startLexing($code);

        // We start off with no lookahead-token
        $tokenId = self::TOKEN_NONE;
        if (!$bLexed) {
            $this->errMsg = $this->lexer->getError();
            return false;
        }

        // The attributes for a node are taken from the first and last token of the node.
        // From the first token only the startAttributes are taken and from the last only
        // the endAttributes. Both are merged using the array union operator (+).
        $startAttributes = array('startLine' => 1);
        $endAttributes   = array();

        // In order to figure out the attributes for the starting token, we have to keep
        // them in a stack
        $attributeStack = array($startAttributes);

        // Start off in the initial state and keep a stack of previous states
        $state = 0;
        $stateStack = array($state);

        // AST stack (?)
        $this->yyastk = array();

        // Current position in the stack(s)
        $this->stackPos = 0;
        $this->tokens = $this->lexer->getTokens();
        for (;;) 
		{
            if (self::$yybase[$state] == 0) {
                $yyn = self::$yydefault[$state];
            } else {
                if ($tokenId === self::TOKEN_NONE) {
                    // Fetch the next token id from the lexer and fetch additional info by-ref.
                    // The end attributes are fetched into a temporary variable and only set once the token is really
                    // shifted (not during read). Otherwise you would sometimes get off-by-one errors, when a rule is
                    // reduced after a token was read but not yet shifted.
                    $origTokenId = $this->lexer->getNextToken($tokenValue, $startAttributes, $nextEndAttributes);

                    // map the lexer token id to the internally used token id's
                    $tokenId = $origTokenId >= 0 && $origTokenId < self::TOKEN_MAP_SIZE
                    ? self::$translate[$origTokenId]
                    : self::TOKEN_INVALID;

                    if ($tokenId === self::TOKEN_INVALID) {
                        $this->errMsg = sprintf('The lexer returned an invalid token (id=%d, value=%s)',$origTokenId, $tokenValue);
                        return false;
                    }

                    $attributeStack[$this->stackPos] = $startAttributes;
                }

                if ((($yyn = self::$yybase[$state] + $tokenId) >= 0
                && $yyn < self::YYLAST && self::$yycheck[$yyn] == $tokenId
                || ($state < self::YY2TBLSTATE
                && ($yyn = self::$yybase[$state + self::YYNLSTATES] + $tokenId) >= 0
                && $yyn < self::YYLAST
                && self::$yycheck[$yyn] == $tokenId))
                && ($yyn = self::$yyaction[$yyn]) != self::YYDEFAULT) {
                    /*
                     * >= YYNLSTATE: shift and reduce
                    * > 0: shift
                    * = 0: accept
                    * < 0: reduce
                    * = -YYUNEXPECTED: error
                    */
                    if ($yyn > 0) {
                        /* shift */
                        ++$this->stackPos;

                        $stateStack[$this->stackPos]     = $state = $yyn;
                        $this->yyastk[$this->stackPos]   = $tokenValue;
                        $attributeStack[$this->stackPos] = $startAttributes;
                        $endAttributes = $nextEndAttributes;
                        $tokenId = self::TOKEN_NONE;

                        if ($yyn < self::YYNLSTATES)
                            continue;

                        /* $yyn >= YYNLSTATES means shift-and-reduce */
                        $yyn -= self::YYNLSTATES;
                    } else {
                        $yyn = -$yyn;
                    }
                } else {
                    $yyn = self::$yydefault[$state];
                }
            }

            for (;;) {
                /* reduce/error */
                if ($yyn == 0) {
                    /* accept */
                    return true;
                } elseif ($yyn != self::YYUNEXPECTED) {
                    /* reduce
                     try {
                    $this->{'yyn' . $yyn}(
                    $attributeStack[$this->stackPos - self::$yylen[$yyn]]
                    + $endAttributes
                    );
                    } catch (PHPParser_Error $e) {
                    if (-1 === $e->getRawLine()) {
                    $e->setRawLine($startAttributes['startLine']);
                    }

                    throw $e;
                    }
                    */
                    /* Goto - shift nonterminal */
                    $this->stackPos -= self::$yylen[$yyn];
                    $yyn = self::$yylhs[$yyn];
                    if (($yyp = self::$yygbase[$yyn] + $stateStack[$this->stackPos]) >= 0
                    && $yyp < self::YYGLAST
                    && self::$yygcheck[$yyp] == $yyn) {
                        $state = self::$yygoto[$yyp];
                    } else {
                        $state = self::$yygdefault[$yyn];
                    }

                    ++$this->stackPos;

                    $stateStack[$this->stackPos]     = $state;
                    $this->yyastk[$this->stackPos]   = $this->yyval;
                    $attributeStack[$this->stackPos] = $startAttributes;
                } else {
                    /* error */
                    $expected = array();

                    $base = self::$yybase[$state];
                    for ($i = 0; $i < self::TOKEN_MAP_SIZE; ++$i) {
                        $n = $base + $i;
                        if ($n >= 0 && $n < self::YYLAST && self::$yycheck[$n] == $i
                        || $state < self::YY2TBLSTATE
                        && ($n = self::$yybase[$state + self::YYNLSTATES] + $i) >= 0
                        && $n < self::YYLAST && self::$yycheck[$n] == $i
                        ) {
                            if (self::$yyaction[$n] != self::YYUNEXPECTED) {
                                if (count($expected) == 4) {
                                    /* Too many expected tokens */
                                    $expected = array();
                                    break;
                                }
                                $expected[] = self::$terminals[$i];
                            }
                        }
                    }

                    $expectedString = '';
                    if ($expected) {
                        $expectedString = ', expecting ' . implode(' or ', $expected);
                    }

                    $this->errMsg = 'Syntax error, unexpected ' . self::$terminals[$tokenId] . $expectedString .' at line '.$startAttributes['startLine'];
                    return false;
                }

                if ($state < self::YYNLSTATES)
                    break;
                /* >= YYNLSTATES means shift-and-reduce */
                $yyn = $state - self::YYNLSTATES;
            }
        }
        return true;
    }

    /**
     * get next tokens after a variable,like curly syntax
     * @param int $k
     * @return array
     */
    public function getVariableToken($k)
    {
        $result = array();
        $res = '';
        $fun = '';
        for ($i=1;;$i++)
        {
            if (isset($this->tokens[$k+$i]))
            {
                if (is_array($this->tokens[$k+$i]))
                {
                    $fun .= $this->tokens[$k+$i][1];
                    continue;
                }
                else
                {
                    if (in_array($this->tokens[$k+$i],$this->tokensVariable))
                    {
                        $res = $this->tokens[$k+$i];
                        break;
                    }
                    $fun .= $this->tokens[$k+$i];
                }
            }
            else
            {
                break;
            }
        }
        $result['token'] = $res;
        $result['func'] = $fun;
        $result['key'] = $i-1;
        return $result;
    }

    /**
     * get next tokens of $k without WHITESPACE
     * @param int $k
     * @return string
     */
    public function getNextToken($k)
    {
        $res = '';
        for ($i=1;;$i++)
        {
            if (isset($this->tokens[$k+$i]))
            {
                if (is_array($this->tokens[$k+$i]))
                {
                    if (in_array($this->tokens[$k+$i][0],$this->tokensSkip))
                    {
                        continue;
                    }
                    else
                    {
                        $res = $this->tokens[$k+$i][1];
                        break;
                    }
                }
                else
                {
                    $res = $this->tokens[$k+$i];
                    break;
                }
            }
            else
            {
                break;
            }
        }
        return $res;
    }

    /**
     * get previou token of $k without WHITESPACE
     * @param int $k
     * @return string
     */
    public function getPreToken ($k)
    {
        $res = '';
        for ($i = 1; $k - $i >= 0; $i ++)
        {
            if (isset($this->tokens[$k - $i]))
            {
                if (is_array($this->tokens[$k - $i]))
                {
                    if (in_array($this->tokens[$k-$i][0],$this->tokensSkip))
                    {
                        continue;
                    } else
                    {
                        $res = $this->tokens[$k - $i][1];
                        break;
                    }
                } else
                {
                    $res = $this->tokens[$k - $i];
                    break;
                }
            } else
            {
                break;
            }
        }
        return $res;
    }

    /**
     * get a piece token of the token after $k,and end with ; OR T_CLOSE_TAG
     * @param int $k
     * @return string
     */
    public function getFilepathToken($k)
    {
        $str = '';
        for ($i = 1;; $i ++)
        {
            if (isset($this->tokens[$k + $i]))
            {
                if (is_array($this->tokens[$k + $i]))
                {
                    if ($this->tokens[$k + $i][0] == T_WHITESPACE)
                    {
                        continue;
                    } elseif($this->tokens[$k + $i][0] == T_CLOSE_TAG)
                    {
                        break;
                    }
                    else
                    {
                        $str .= trim(trim($this->tokens[$k + $i][1],'"'),'\'');
                    }
                } else
                {
                    if ($this->tokens[$k + $i] == ';' || ($this->tokens[$k + $i] == ')' && $this->getNextToken($k + $i) == ';') || ($this->tokens[$k + $i] == ')' && $this->getNextToken($k + $i) == '.'))
                    {
                        break;
                    }
                    elseif ($this->tokens[$k + $i] == '.')
                    {
                        $str = '';
                        continue;
                    }
                    $str .= $this->tokens[$k + $i];
                }
            } else
            {
                break;
            }
        }
        return $str;
    }

    /**
     * get all token from $k to END TOKEN. (T_CLOSE_TAG or ;)
     * @param int $k
     * @return string
     */
    public function getPieceTokenAll ($k)
    {
        $str = $str1 = '';
        $l = $r = 0;
        for ($i = 1;; $i ++)
        {
            if (isset($this->tokens[$k + $i]))
            {
                if (is_array($this->tokens[$k + $i]))
                {
                    if (in_array($this->tokens[$k + $i][0],array(T_CLOSE_TAG))|| ($l != 0 && $l == $r))
                    {
                        break;
                    }
                    if (!in_array($this->tokens[$k + $i][0],array(T_WHITESPACE,T_COMMENT,T_DOC_COMMENT,T_INLINE_HTML,T_ECHO,T_ENCAPSED_AND_WHITESPACE)))
                    {
                        $str1 .= $this->tokens[$k + $i][1];
                    }
                    $str .= $this->tokens[$k + $i][1];
                }
                else
                {
                    if ($this->tokens[$k + $i] == ';' || ($l != 0 && $l == $r))
                    {
                        break;
                    }
                    if ($this->tokens[$k + $i] == '(')
                    {
                        $l ++;
                    }
                    if ($this->tokens[$k + $i] == ')')
                    {
                        $r ++;
                    }
                    $str .= $this->tokens[$k + $i];
                    $str1 .= $this->tokens[$k + $i];
                }
            }
            else
            {
                break;
            }
        }
        return array('more'=>$str,'less'=>$str1);
    }

    /**
     * get all tokens
     * @return array
     */
    public function getTokens()
    {
        return $this->tokens;
    }

    /**
     * get error messages
     * @return string
     */
    public function getErrmsg()
    {
        return $this->errMsg;
    }
}

class Pecker_Loger
{
    protected $result;
    private $file;
    function __construct()
    {
        $this->result = array();
    }
    public function setFile($file)
    {
        $this->file = $file;
        $this->result[$this->file] = array('parser' => true,'message'=>'','function'=>array());
    }
    public function errorLog($msg)
    {
        $this->result[$this->file]['parser'] = false;
        $this->result[$this->file]['message'] = $msg;
    }

    public function catchLog($func, $line, array $code =array('more'=>'', 'less'=>''))
    {
        $this->result[$this->file]['parser'] = true;
        $this->result[$this->file]['function'][$func] = isset($this->result[$this->file]['function'][$func]) ? $this->result[$this->file]['function'][$func] : array();
        $this->result[$this->file]['function'][$func][] = array('line'=>$line,'codemore'=>$code['more'], 'codeless'=>$code['less']);
    }

    public function getReport()
    {
        return $this->result;
    }
}

/**
* Computes the entropy of an array of tokens (aka symbols).
*/
class Entropy 
{  
    var $tokens      = array();   //待检测字符集
    var $num_events  = 0;         //样本字符数
    var $token_freqs = array();   //字符频度
    var $token_probs = array();   //词频占比
    var $num_tokens  = 0;         //词频类别总数(即样本中含有的字符类别数)
    var $bits        = 0.0;       //熵值: 表示字符频度分布的平均程度，越大表示字符分布越平均
    var $maxent      = 0.0;       //最大熵: 表示字符分布范围，越大表示频度分布范围越广
    var $ratio       = 0.0;    

    function Entropy($tokens) 
    { 
        $this->tokens      = $tokens;
        $this->num_events  = count($this->tokens);
        $this->token_freqs = $this->getTokenFrequencies();
        $this->num_tokens  = count($this->token_freqs);
        foreach ($this->token_freqs as $token => $freq) 
        { 
            //字符的词频占比(即某个字符占总字符的百分比)
            $this->token_probs[$token]  = $freq / $this->num_events;
            $entropy += $this->token_probs[$token] * log($this->token_probs[$token], 2);   
        }
        $this->bits   = -1.0 * $entropy;
        $this->maxent = log($this->num_tokens, 2);    
        $this->ratio  = $this->bits / $this->maxent; 
    }

    function getTokenFrequencies() 
    { 
        for ($i = 0; $i < $this->num_events; $i++)
        {
            //统计字符(a ~ z)的词频
            $this->token_freqs[$this->tokens[$i]]++;
        } 
        return $this->token_freqs; 
    } 
}


?>