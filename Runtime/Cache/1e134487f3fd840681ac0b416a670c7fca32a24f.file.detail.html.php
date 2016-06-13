<?php /* Smarty version Smarty-3.1.6, created on 2015-05-20 18:21:42
         compiled from "D:/PHP/wamp/www/DE/Home/View\Reviews\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:20644555c30e22dcda6-47830976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e134487f3fd840681ac0b416a670c7fca32a24f' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Reviews\\detail.html',
      1 => 1432117300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20644555c30e22dcda6-47830976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_555c30e24d8b1',
  'variables' => 
  array (
    'goods' => 0,
    'v' => 0,
    'k' => 0,
    'reviews' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c30e24d8b1')) {function content_555c30e24d8b1($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__MODULE__;?>
/User/myreviews">我的评价</a> <code>&gt;</code>评价详情
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div style="border:1px solid #d0d0d0;"class="block clearfix">
		<div style="width:950px;">
			<span style="font-size:14px;text-align:center;display:inline-block;margin:20px 0px 0px 100px;width:300px;">商品</span>
			<span style="font-size:14px; text-align:center;display:inline-block;width:200px;">满意度</span>
			<span style="font-size:14px;display:inline-block;margin:0 100px 0 0;width:200px;">评价</span>
		</div>
		<hr/>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<div style="width:950px;text-align:left;margin-bottom:20px;">
				<span style="text-align:center;display:inline-block;margin:20px 0px 0px 100px;width:300px;">
					<a style="inline-block;" href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank">
						<img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="100px" width="100px" />
					</a>
				</span>
				<span style=" text-align:center;display:inline-block;width:200px;">
					<?php if ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['k']->value]['rate']==0){?>
						<font color="green">满意</font>
					<?php }elseif($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['k']->value]['rate']==1){?>
						<font color="blue">一般</font>
					<?php }else{ ?>
						<font color="red">不满意</font>
					<?php }?>
				</span>
				<span style="display:inline-block;margin:0 100px 0 0;width:200px;"><?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['k']->value]['review'];?>
</span>
		</div>
		<hr/>
		<?php } ?>
</div><?php }} ?>