<?php /* Smarty version Smarty-3.1.6, created on 2016-06-11 22:16:01
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:286045561f656c68482-55202977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53e4965712dc852c1db581108bc165610aaffe65' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\login.html',
      1 => 1465654489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286045561f656c68482-55202977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561f656e065e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561f656e065e')) {function content_5561f656e065e($_smarty_tpl) {?><div class="block block1">
	<div class="block box">
		<div class="blank"></div>
		<div id="ur_here">
			当前位置: <a href="<?php echo @__MODULE__;?>
">首页</a>
			<code>&gt;</code>
			用户登录
		</div>
	</div>
	<div class="blank"></div>
	<div class="block box">
		<div class="usBox clearfix">
			<div class="usBox_1">
				<div class="logtitle">会员登录</div>
				<form id="formLogin" name="formLogin" class="formLogin" action="<?php echo @__SELF__;?>
" method="post">
				    <div class="user_info">
					    <input name="username" id="username" datatype="s5-18" nullmsg="请输入用户名！" errormsg="用户名至少5个字符,最多16个字符！" class="inputBg" type="text" placeholder="用户名" />
					    <span class="Validform_checktip"></span>
				    </div>
				    <div class="user_info">
					   <input name="password" class="inputBg" datatype="*6-16" nullmsg="请输入密码！" errormsg="密码范围在6~16位之间！" type="password" placeholder="密码"/>
					   <span class="Validform_checktip"></span>
				    </div>
				    <div class="user_info">
					   <input class="TxtValidateCodeCssClass" datatype="s4-4" nullmsg="请输入验证码！" errormsg="验证码错误！" id="captcha" name="captcha" type="text" placeholder="验证码"/>
					   <span class="Validform_checktip"></span>
                       <div class="code_img"><img src="<?php echo @__CONTROLLER__;?>
/verifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg?code='+Math.random()" /></div>
				    </div>
				    <div class="user_info">
					   <input value="1" name="remember" id="remember" checked type="checkbox"/>
					   <label for="remember">请保存我这次的登录信息。</label>
				    </div>
				    <div class="user_login">
						<input name="act" value="act_login" type="hidden" />
						<input name="back_act" value="./index.php" type="hidden" />
                        <input name="submit" value="" class="us_Submit" type="submit"/>
						<a href="<?php echo @__CONTROLLER__;?>
/getpass" class="f3">注册邮件找回密码</a>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- <script src="<?php echo @JS_URL;?>
user.js"></script> -->
<script type="text/javascript">
	$(function() {
		$(".formLogin").Validform({
			tiptype : 1
		});
	});

	$("document").ready(function() {
		function check_name(ev) {
			//alert(username.value);
			var url = "<?php echo @__CONTROLLER__;?>
/check_name?username="
					+ username.val();
			var error = username.val().length;
			if (error>5) {
				var request = new XMLHttpRequest();
				request.open("GET", url);
				request.send();
				request.onreadystatechange = function() {
					if (request.readyState === 4) {
						if (request.responseText != 1) {
							alert("用户名不存在");
						}
					}
				}
			}
		}
		var us_Submit = $("#formLogin");
		var username = $("#username");
		us_Submit.on("submit", check_name);
	});
</script><?php }} ?>