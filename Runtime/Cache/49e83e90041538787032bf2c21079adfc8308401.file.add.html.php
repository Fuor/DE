<?php /* Smarty version Smarty-3.1.6, created on 2015-05-31 19:47:25
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Role\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1270055542adb86ac62-65214223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49e83e90041538787032bf2c21079adfc8308401' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Role\\add.html',
      1 => 1433072842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270055542adb86ac62-65214223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55542adb95911',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55542adb95911')) {function content_55542adb95911($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加角色</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》添加角色</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form class="add" action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>角色名称</td>
                    <td><input type="text" name="role_name" datatype="s2-6" nullmsg="请输入角色名称！" errormsg="角色名称长度为2~6个字符！" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加" />
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
			$(".add").Validform({
				tiptype:3
			});
		})
	</script>
	
    </body>
</html>
<?php }} ?>