<?php if ($this->_var['new_goods']): ?>

<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_08762600_1458132774');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_08762600_1458132774']):
?>
<dd >
  <div class="hot_img"> <span class="hot"></span>
    <div class="text">
      <p class="name"><a href="<?php echo $this->_var['goods_0_08762600_1458132774']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_08762600_1458132774']['name']); ?>"><?php echo $this->_var['goods_0_08762600_1458132774']['short_style_name']; ?></a></p>
      <p class="brife"> <?php echo $this->_var['goods_0_08762600_1458132774']['brief']; ?></p>
      <p class="price" > <font class="aa"> 
        <?php if ($this->_var['goods_0_08762600_1458132774']['promote_price'] != ""): ?> 
        <?php echo $this->_var['goods_0_08762600_1458132774']['promote_price']; ?> 
        <?php else: ?> 
        <?php echo $this->_var['goods_0_08762600_1458132774']['shop_price']; ?> 
        <?php endif; ?> 
        </font> <font class="bb"><?php echo $this->_var['goods_0_08762600_1458132774']['market_price']; ?></font> </p>
    </div>
    <div class="pic"> <a href="<?php echo $this->_var['goods_0_08762600_1458132774']['url']; ?>"><img src="<?php echo $this->_var['goods_0_08762600_1458132774']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_08762600_1458132774']['name']); ?>" class="goodsimg" /></a></div>
  </div>
   <div class="hot_btn"> <a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods_0_08762600_1458132774']['id']; ?>,1,'new')"  ></a> </div>
      <div class="hot_line" > </div>
      <div class="sucess_joinCart" id="addtocartdialog_retui_<?php echo $this->_var['goods_0_08762600_1458132774']['id']; ?>_new">

</div>
</dd>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

<?php endif; ?> 
