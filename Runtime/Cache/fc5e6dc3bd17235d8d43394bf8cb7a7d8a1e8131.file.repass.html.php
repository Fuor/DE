<?php /* Smarty version Smarty-3.1.6, created on 2015-05-31 16:13:32
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Manager\repass.html" */ ?>
<?php /*%%SmartyHeaderCode:80515559bbc28387a6-36921914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc5e6dc3bd17235d8d43394bf8cb7a7d8a1e8131' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Manager\\repass.html',
      1 => 1433060009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80515559bbc28387a6-36921914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5559bbc291b0d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559bbc291b0d')) {function content_5559bbc291b0d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改密码</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理中心-》修改密码</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form class="repass" action="<?php echo @__SELF__;?>
" method="post">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>
                    	<input type="password" name="opassword" datatype="s6-18" nullmsg="请输入原密码！" errormsg="密码至少6个字符,最多18个字符！" placeholder="请输入原密码" />
                    	<span class="Validform_checktip"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    	<input type="password" name="mg_pwd" datatype="s6-18" nullmsg="请输入新密码！" errormsg="密码至少6个字符,最多18个字符！" placeholder="请输入新密码" />
                    	<span class="Validform_checktip"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="确认修改"/>
                    </td>
                </tr>
            </table>
            </form>
        </div>

   	<script src="<?php echo @JS_URL;?>
jquery-1.8.2.js"></script>
	<script type="text/javascript" src="<?php echo @VALIDFORM_JS_URL;?>
Validform_v5.3.2.js"></script>
    <script type="text/javascript">
		$(function(){
			$(".repass").Validform({
				tiptype:3
			});
		})
	</script>
	
    </body>
</html>
<?php }} ?>