<?php /* Smarty version Smarty-3.1.6, created on 2016-06-10 21:01:00
         compiled from "D:/PHP/wamp/www/DE/Home/View\Goods\search.html" */ ?>
<?php /*%%SmartyHeaderCode:1101556342f14bb4f1-55214302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe811e1c1883f9c4dbe073022bf414864b28cc7c' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Goods\\search.html',
      1 => 1465563539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1101556342f14bb4f1-55214302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_556342f18b6e6',
  'variables' => 
  array (
    'key' => 0,
    'row' => 0,
    'vv' => 0,
    'vvv' => 0,
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
    'goods' => 0,
    'hot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556342f18b6e6')) {function content_556342f18b6e6($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here">
        	当前位置: <a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
        	 	    <a href="<?php echo @__CONTROLLER__;?>
/catlist">商品查找</a> <code>&gt;</code> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

    </div>
</div>
<div class="block">
    <div style="float:left; width:880px">
        <div id="category_tree" class="box_1" style="width:880px">
            <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                <dl style="margin:0px;padding:0px">
                    <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['vv']->value['cat_name'];?>
</a></dt>
                    <dd>   
                    <?php if ($_smarty_tpl->tpl_vars['vv']->value['childs']){?>
                        <?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_smarty_tpl->tpl_vars['kkk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value){
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
 $_smarty_tpl->tpl_vars['kkk']->value = $_smarty_tpl->tpl_vars['vvv']->key;
?>  
                        <a href="<?php echo @__CONTROLLER__;?>
/catlist/id/<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vvv']->value['cat_name'];?>
</a>
                        <?php } ?>
                    <?php }?>
                    </dd>
                </dl>
             <?php } ?>
        </div>
                    
        <div class="block box">
            <div class="goodsList">
                <?php if ($_smarty_tpl->tpl_vars['info']->value){?>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <div class="item">
                        <div>
                             <a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank">
                                <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
">
                             </a>
                         </div>
                        <div class="goods-price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
<span>销量：<?php echo $_smarty_tpl->tpl_vars['v']->value['volume'];?>
</span></div>
                        <div class="goods-name"><a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></div>
                    </div>
                    <?php } ?>
                    <div class="pagelist"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</div>
                <?php }else{ ?>
                        <div class="no-item">该分类下暂无商品，看看下面为您推荐的吧。</div>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <div class="item">
                            <div>
                                <a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank">
                                 <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
">
                                </a>
                            </div>
                            <div class="goods-price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
<span>销量：<?php echo $_smarty_tpl->tpl_vars['v']->value['volume'];?>
</span></div>
                            <div class="goods-name"><a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></div>
                        </div>
                        <?php } ?>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="right-botbar">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <div class="hot-item">
            <div class="hot-img">
             <a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank">
                 <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
">
             </a>
            </div>
            <div><span class="hot-price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</span><span class="hot-volume">销量：<?php echo $_smarty_tpl->tpl_vars['v']->value['volume'];?>
</span></div>
            <div class="hot-item-name"><a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></div>
        </div>
        <?php } ?>
    </div>
</div>
<?php }} ?>