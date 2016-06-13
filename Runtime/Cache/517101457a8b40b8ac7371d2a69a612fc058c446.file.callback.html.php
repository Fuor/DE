<?php /* Smarty version Smarty-3.1.6, created on 2015-05-08 23:57:21
         compiled from "D:/PHP/wamp/www/DE/Home/View\Order\callback.html" */ ?>
<?php /*%%SmartyHeaderCode:9224554a222fbb77d3-64912490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '517101457a8b40b8ac7371d2a69a612fc058c446' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Order\\callback.html',
      1 => 1431100603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9224554a222fbb77d3-64912490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554a222fbe65e',
  'variables' => 
  array (
    'orderid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a222fbe65e')) {function content_554a222fbe65e($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__MODULE__;?>
/User/index">用户中心</a> <code>&gt;</code>订单详情
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
	<div class="order_detail1">
		<div>支付成功</div>
		<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>

	</div></div><?php }} ?>