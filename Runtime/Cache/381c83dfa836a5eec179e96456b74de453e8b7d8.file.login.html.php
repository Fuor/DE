<?php /* Smarty version Smarty-3.1.6, created on 2016-06-06 18:31:54
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:124195562b393ec2366-41853030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '381c83dfa836a5eec179e96456b74de453e8b7d8' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Manager\\login.html',
      1 => 1465209091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124195562b393ec2366-41853030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5562b3940e373',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5562b3940e373')) {function content_5562b3940e373($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />
        <title>管理员登录</title>
        <link href="<?php echo @ADMIN_CSS_URL;?>
User_Login.css" type="text/css" rel="stylesheet" />
    	<script src="<?php echo @JS_URL;?>
jquery-1.8.2.js"></script>
		<script src="<?php echo @JS_URL;?>
jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="<?php echo @VALIDFORM_JS_URL;?>
Validform_v5.3.2.js"></script>
    
    </head>
<body >
        <div id="user_login">
            <dl>
                <dd>
                    <div id="user_top">
                    	<div style="text-align:center;padding:25px;font-size:20px;color:white;">后台登录</div>
                    </div>
                </dd>
                <dd id="user_main">
                    <form class="mg_login" action="<?php echo @__SELF__;?>
" method="post">
	                    <div class="user_main_box">
	                        <div><input class="TxtUserNameCssClass" id="admin_user" datatype="s3-18" nullmsg="请输入用户名！" errormsg="用户名至少3个字符,最多16个字符！" maxlength="20" name="mg_username" placeholder="用户名" /> 
	                   		</div><span class="Validform_checktip"></span>
	                        <div class="input"><input class="TxtPasswordCssClass" id="admin_psd" datatype="s6-18" nullmsg="请输入密码！" errormsg="密码至少6个字符,最多18个字符！" name="mg_password" type="password" placeholder="密码"/>
	                        </div><span class="Validform_checktip"></span>
	                        <div class="input"><input class="TxtValidateCodeCssClass" id="captcha" datatype="s4-4" nullmsg="请输入验证码！" errormsg="验证码错误" name="captcha" type="text" placeholder="验证码" />
	                        </div><span class="Validform_checktip"></span>
	                        <div class="check_code"><img src="<?php echo @__CONTROLLER__;?>
/verifyImg"  onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg?code='+Math.random()" /></div>
	                    </div>
	                    <div class="submit"><input value="登录" type="submit" /></div>
                    </form>
                </dd>
             </dl>
          </div>
    <script type="text/javascript">
		$(function(){
			$(".mg_login").Validform({
				tiptype:3
			});
		})
	</script>
</body>
</html><?php }} ?>