<?php /* Smarty version Smarty-3.1.6, created on 2015-05-31 20:07:15
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Auth\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:2305455582a6f230736-53070522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c292cdc061eadb68b431974f393821a517f26ae' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Auth\\upd.html',
      1 => 1433074033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2305455582a6f230736-53070522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55582a6f414da',
  'variables' => 
  array (
    'info' => 0,
    'authinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55582a6f414da')) {function content_55582a6f414da($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\PHP\\wamp\\www\\ThinkPHP\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》修改权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form class="upd" action="<?php echo @__SELF__;?>
" method="post">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>权限名称</td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_name'];?>
" name="auth_name" datatype="s3-8" nullmsg="请输入权限名称！" errormsg="角色名称长度为3~8个字符！" /></td>
                </tr>
                <tr>
                    <td>权限父级</td>
                    <td>
                        <select name='auth_pid' datatype="*" nullmsg="请选择权限父级！" ignore="ignore">
                            <option value=''>请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['authinfo']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>权限控制器</td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_c'];?>
" name="auth_c" datatype="s2-10" nullmsg="请输入控制器名称！" errormsg="控制器名称长度为2~10个字符！" ignore="ignore" /></td>
                </tr>
                <tr>
                    <td>权限操作方法</td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_a'];?>
" name="auth_a" datatype="s2-10" nullmsg="请输入操作名称！" errormsg="操作名称长度为2~10个字符！" ignore="ignore" /></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加"/>
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
			$(".upd").Validform({
				tiptype:3
			});
		})
	</script> 
        
    </body>
</html>
<?php }} ?>