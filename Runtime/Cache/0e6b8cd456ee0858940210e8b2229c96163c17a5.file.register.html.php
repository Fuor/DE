<?php /* Smarty version Smarty-3.1.6, created on 2016-06-11 22:27:48
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:57135562ce27a1c165-66707850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e6b8cd456ee0858940210e8b2229c96163c17a5' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\register.html',
      1 => 1465655265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57135562ce27a1c165-66707850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5562ce27e2b35',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5562ce27e2b35')) {function content_5562ce27e2b35($_smarty_tpl) {?><div class="block block1">  
	<div class="block box">
		<div class="blank"></div>
		<div id="ur_here">
          	当前位置: <a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code> 用户注册 
		</div>
	</div>
	<div class="blank"></div>
 	<div class="block box">
		<div class="usBox">
			<div class="usBox_2">
				<div class="regtitle3">免费注册</div>
				<form class="reg" id="yw0" action="<?php echo @__SELF__;?>
" method="post">
					<div class="user_info">
                            	<input class="inputBg" datatype="s5-18" nullmsg="请输入用户名！" errormsg="用户名至少5个字符,最多16个字符！" name="username" id="User_username" type="text" placeholder="用户名" />                  
                            	<span class="Validform_checktip"></span>
                            </div>
							
							<div class="user_info">
								<input class="inputBg" datatype="s6-18" nullmsg="请输入密码！" errormsg="密码至少6个字符,最多18个字符！" name="password" id="User_password" type="password" placeholder="密码" />         
								<span class="Validform_checktip"></span>
							</div>
						    <div class="user_info">
								<input class="inputBg" name="password2" recheck="password" datatype="s6-18" nullmsg="请输入确认密码！" errormsg="两次密码不一致" id="User_password2" type="password" placeholder="确认密码" />
                           		<span class="Validform_checktip"></span>
                            </div>
                            <div class="user_info">
                            	<input class="inputBg" name="user_email" datatype="e" nullmsg="请输入邮箱"  errormsg="请填写正确的邮箱账号" id="User_user_email" type="text" placeholder="邮箱"/>    
                            	<span class="Validform_checktip"></span>
                            </div>
                            <div class="user_info">
                            	<input class="inputBg" name="user_qq" datatype="n5-12" nullmsg="请输入QQ号"  errormsg="请填写正确的QQ号" id="User_user_qq" type="text" placeholder="QQ"/>
                            	<span class="Validform_checktip"></span>
                            </div>
                            <div class="user_info">
                            	<input class="inputBg" name="user_tel" datatype="m" nullmsg="请输入手机号"  errormsg="请填写正确的手机号" id="User_user_tel" type="text" placeholder="手机号" />
                             	<span class="Validform_checktip"></span>
                             </div>
                            <div class="user_info">
								<input id="ytUser_user_sex" type="hidden" value="" name="User[user_sex]" />
								<span id="User_user_sex">
									<input id="User_user_sex_0" value="0" checked="checked" type="radio" name="user_sex" /> 
									<label for="User_user_sex_0">男</label>&nbsp;
									<input id="User_user_sex_1" value="1" type="radio" name="user_sex" /> 
									<label for="User_user_sex_1">女</label>&nbsp;
								</span>                                
							</div>
							<div class="user_reg">
								<input name="Submit" value="" class="us_Submit_reg" type="submit" />
                            </div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$(".reg").Validform({
		tiptype:1
	});
})
</script><?php }} ?>