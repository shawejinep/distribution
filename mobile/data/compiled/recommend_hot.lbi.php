<?php if ($this->_var['hot_goods']): ?>
<section class="index_floor">
  <div class="floor_body1" >
    <h2><em></em><?php echo $this->_var['lang']['hot_goods']; ?><div class="geng"><a href="search.php?intro=hot" >更多</a> <span></span></div></h2>
    <div id="scroll_hot" class="scroll_hot">
      <div class="bd">
        <ul>
          <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_81389600_1507270114');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_81389600_1507270114']):
        $this->_foreach['hot_goods']['iteration']++;
?>
          <li>
            <a href="<?php echo $this->_var['goods_0_81389600_1507270114']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_81389600_1507270114']['name']); ?>">
             <div class="index_pro"> 
              <div class="products_kuang">
                <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods_0_81389600_1507270114']['thumb']; ?>"></div>
              <div class="goods_name"><?php echo $this->_var['goods_0_81389600_1507270114']['name']; ?></div>
              <div class="price">
                   <a href="javascript:addToCart(<?php echo $this->_var['goods_0_81389600_1507270114']['id']; ?>)" class="btns">
                    <img src="themes/tianxin100/images/index_flow.png">
                </a>
              <span href="<?php echo $this->_var['goods_0_81389600_1507270114']['url']; ?>" class="price_pro"><?php if ($this->_var['goods_0_81389600_1507270114']['promote_price']): ?><?php echo $this->_var['goods_0_81389600_1507270114']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_81389600_1507270114']['shop_price']; ?><?php endif; ?></span>
              </div>
              </div>
            </a>
          </li>

          <?php if ($this->_foreach['hot_goods']['iteration'] % 3 == 0 && $this->_foreach['hot_goods']['iteration'] != $this->_foreach['hot_goods']['total']): ?> </ul>
        <ul>
          <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
        <div class="hd">
          <ul></ul>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    TouchSlide({ 
      slideCell:"#scroll_hot",
      titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
      effect:"leftLoop", 
      autoPage:true, //自动分页
      //switchLoad:"_src" //切换加载，真实图片路径为"_src" 
    });
  </script>
<?php endif; ?>