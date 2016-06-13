<?php /* Smarty version Smarty-3.1.6, created on 2015-06-06 00:14:07
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\repass.html" */ ?>
<?php /*%%SmartyHeaderCode:536755462a92215d54-77403230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbff5daa66e4c5aaed54907ef43d27533ecca9f1' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\repass.html',
      1 => 1433520845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536755462a92215d54-77403230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55462a9232f19',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55462a9232f19')) {function content_55462a9232f19($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__CONTROLLER__;?>
/index">用户中心</a> <code>&gt;</code>修改密码
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
	<div class="AreaL" style="width:17%">
		<h3><span>全部功能</span></h3> 
		<div id="category_tree" class="box_1" style="font-size:14px">
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
/mycart">去购物车</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/myreviews">我的评价</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/repass">修改密码</a>
				</dd>
			</dl>
		</div>
	</div>
	<div style="width:81%;">
		<form class="repass" action="<?php echo @__SELF__;?>
" method="post">
			<div style="width:700px;height:195px;text-align:center;border:1px solid ">
				<div style="margin:50px 10px 10px 10px ">
					<input type="password" name="opassword" datatype="s6-18" nullmsg="请输入原密码" errormsg="密码长度为6~18个字符！" placeholder="请输入原密码"/>
				</div>
				<div>
					<input type="password" name="password" datatype="s6-18" nullmsg="请输入新密码" errormsg="密码长度为6~18个字符！" placeholder="请输入新密码"/>
				</div>
				<div style="margin:10px 10px 10px 10px"><input type="submit" value="确认修改"/></div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$(".repass").Validform({
		tiptype:1
	});
})
</script><?php }} ?>