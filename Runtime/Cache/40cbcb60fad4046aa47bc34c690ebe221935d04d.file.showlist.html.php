<?php /* Smarty version Smarty-3.1.6, created on 2015-05-25 20:03:29
         compiled from "D:/PHP/wamp/www/DE/Home/View\Goods\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:107035561c7a5b2ea88-43502356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40cbcb60fad4046aa47bc34c690ebe221935d04d' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Goods\\showlist.html',
      1 => 1432555215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107035561c7a5b2ea88-43502356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561c7a5e6ad4',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561c7a5e6ad4')) {function content_5561c7a5e6ad4($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here">
        	当前位置: <a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>商品列表
    </div>
</div>



           
<div class="block">
	<div class="block box">
		<div class="goodsList">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<div class="item">
					<div><a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" height="250px" width="205px"></a></div>
					<div><font size="3px" color="red">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</font>&nbsp;&nbsp;&nbsp;&nbsp;销量：<?php echo $_smarty_tpl->tpl_vars['v']->value['volume'];?>
</div>
					<div><a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div style="width:880px;float:left"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</div>
</div>
        
<?php }} ?>