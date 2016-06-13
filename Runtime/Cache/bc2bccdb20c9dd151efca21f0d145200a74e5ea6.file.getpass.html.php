<?php /* Smarty version Smarty-3.1.6, created on 2015-06-01 14:03:13
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\getpass.html" */ ?>
<?php /*%%SmartyHeaderCode:62325557328b7bc006-31056693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc2bccdb20c9dd151efca21f0d145200a74e5ea6' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\getpass.html',
      1 => 1433138587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62325557328b7bc006-31056693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5557328b83cea',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557328b83cea')) {function content_5557328b83cea($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>找回密码
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
	<div style="width:1100px;height:200px;border:1px solid #ccc;text-align:center;">
		<div style="margin-top:90px;">
			<form class="getpass" action="<?php echo @__SELF__;?>
" method="post">
				<div><input type="text" size="25"; datatype="e" nullmsg="请输入注册时填写的邮箱" errormsg="邮箱格式错误！" placeholder="请输入注册时填写的邮箱" name="email"/>
				<input type="submit" value="确定找回"/></div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$(".getpass").Validform({
		tiptype:1
	});
})
</script><?php }} ?>