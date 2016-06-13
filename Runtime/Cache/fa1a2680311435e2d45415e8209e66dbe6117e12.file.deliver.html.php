<?php /* Smarty version Smarty-3.1.6, created on 2015-05-14 23:22:44
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Order\deliver.html" */ ?>
<?php /*%%SmartyHeaderCode:86025554bb2bf1e8e8-58600188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa1a2680311435e2d45415e8209e66dbe6117e12' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Order\\deliver.html',
      1 => 1431616961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86025554bb2bf1e8e8-58600188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5554bb2c1285b',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554bb2c1285b')) {function content_5554bb2c1285b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>订单发货</title>
    <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
	
	.tr_color{background-color: #9F88FF}
	li{list-style-type:none;}
	span{font-size:14px;font-weight:bold;}
	.detail{font-size:14px;color:blue;}
	
</style>
<div class="div_head">
	<span>
	    <span style="float: left;">当前位置是：订单管理-》订单发货</span>
	    <span style="float:right;margin-right: 8px;font-weight: bold">
             <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a></span>
	</span>
</div>
<div class="block clearfix">
	<div>
		<span class="detail">订单号：<?php echo $_smarty_tpl->tpl_vars['info']->value['order_no'];?>
</span>&nbsp;
	</div>
	<hr/>
	<div>
		<div class="detail">
			<p>收货信息</p>
		</div>
		<div>
			<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
，<?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
，<?php echo $_smarty_tpl->tpl_vars['info']->value['adress'];?>
，<?php echo $_smarty_tpl->tpl_vars['info']->value['postcode'];?>

		</div>
	</div>
	<hr/>
	<form action="<?php echo @__SELF__;?>
" method="post">
		<div>
			<div class="detail">
				<p>快递信息</p>
			</div>
			<div>
				快递公司：<input type="text" name="tracking_type"/>
				快递单号：<input type="text" name="tracking_num"/>
			</div>
			<p><input type="submit" value="确认发货"/></p>
		</div>
	</form>
</div>
</body>
</html><?php }} ?>