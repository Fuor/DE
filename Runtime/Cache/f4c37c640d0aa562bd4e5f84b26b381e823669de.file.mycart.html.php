<?php /* Smarty version Smarty-3.1.6, created on 2015-05-03 22:02:54
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\mycart.html" */ ?>
<?php /*%%SmartyHeaderCode:1048655462a8e1a3a79-87123653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4c37c640d0aa562bd4e5f84b26b381e823669de' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\mycart.html',
      1 => 1430661747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1048655462a8e1a3a79-87123653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55462a8e2d073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55462a8e2d073')) {function content_55462a8e2d073($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__CONTROLLER__;?>
/index">用户中心</a> <code>&gt;</code>我的购物车
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
	<div class="AreaL" style="width:17%">
		<h3><span>全部功能</span></h3> 
		<div id="category_tree" class="box_1" >
			<dl>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/info">个人信息</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/myorder">我的订单</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/mycart">看购物车</a>
				</dd>
				<dd>     
				    <a href="#">退货管理</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/repass">修改密码</a>
				</dd>
			</dl>
		</div>
	</div>
	<div style="float:left;width:60%">
		&nbsp;<font class="f4_b"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</font>
	</div>
	<div style="float:left">
		<div>猜你喜欢</div>
	</div>
</div><?php }} ?>