<?php /* Smarty version Smarty-3.1.6, created on 2015-06-06 00:34:16
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\info.html" */ ?>
<?php /*%%SmartyHeaderCode:20086554621c6d3e387-91895579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03aa5548b9e42ae680d81ffb35adafdd4c070dfa' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\info.html',
      1 => 1433522053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20086554621c6d3e387-91895579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554621c70902a',
  'variables' => 
  array (
    'username' => 0,
    'infos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554621c70902a')) {function content_554621c70902a($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__CONTROLLER__;?>
/index">用户中心</a> <code>&gt;</code>个人信息
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>
<div class="block clearfix" style=" border:1px solid #F5F5F5;">
	<div class="AreaL" style="width:17%">
		<h3><span>全部功能</span></h3> 
		<div id="category_tree" class="box_1" style="font-size:14px" >
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
				    <a href="<?php echo @__MODULE__;?>
/Cart/index">去购物车</a>
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
	<div style="float:left;width:80%;">
		<div style="margin:5px 30px;width:100%">
			<div ><span class="info_span" style="color:#FF8C00">基本信息</span><span class="info_span"><a style="color:#FFFFFF;text-decoration:none" href="<?php echo @__CONTROLLER__;?>
/adress">收货地址</a></span></div>	
			<hr>
			<form class="info" action="<?php echo @__SELF__;?>
" method="post">
				<div class="info">
					<div class="info">
						<span class="f5_a">用户名：</span>
							<input name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" readonly style="font-size:14px;">
							*用户名不能修改</div>
					<div class="info">
						<span class="f5_a">性&nbsp;别：</span>
						<?php if ($_smarty_tpl->tpl_vars['infos']->value['user_sex']==0){?>
							<input type="radio" name="user_sex" value="0" style="font-size:14px;" checked="checked" >男
							<input type="radio" name="user_sex" value="1" style="font-size:14px;">女
						<?php }else{ ?>
							<input type="radio" name="user_sex" value="0" style="font-size:14px;">男
							<input type="radio" name="user_sex" value="1" style="font-size:14px;" checked="checked">女
						<?php }?>
					</div>
					<div class="info">
						<span class="f5_a">QQ&nbsp;号：</span>
							<input name="user_qq" datatype="n5-12" nullmsg="请输入QQ号"  errormsg="请填写正确的QQ号"  value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['user_qq'];?>
"  style="font-size:14px;">
							<span class="Validform_checktip"></span></div>
					<div class="info">
						<span class="f5_a">邮&nbsp;箱：</span>
							<input name="user_email" datatype="e" nullmsg="请输入邮箱"  errormsg="请填写正确的邮箱账号" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['user_email'];?>
"  style="font-size:14px;">
							<span class="Validform_checktip"></span>
							</div>
					<div class="info">
						<span class="f5_a"></span>
						<!-- 隐藏传递用户ID以便根据ID进行更新 -->
						<input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['user_id'];?>
">
						<input type="submit" value="保存"  style="width:60px;height:30px;font-size:14px;background:#0963c4;color:#fff"></div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$(".info").Validform({
		postonce:true,
		tiptype:1
	});
})
</script><?php }} ?>