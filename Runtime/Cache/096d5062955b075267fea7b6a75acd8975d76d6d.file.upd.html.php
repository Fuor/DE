<?php /* Smarty version Smarty-3.1.6, created on 2015-05-31 19:43:15
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Manager\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:31454556af32e54b221-58883681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '096d5062955b075267fea7b6a75acd8975d76d6d' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Manager\\upd.html',
      1 => 1433072591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31454556af32e54b221-58883681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_556af32e6a2e7',
  'variables' => 
  array (
    'mg_id' => 0,
    'info' => 0,
    'rinfo' => 0,
    'role_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556af32e6a2e7')) {function content_556af32e6a2e7($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\PHP\\wamp\\www\\ThinkPHP\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改管理员信息</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》修改管理员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Manager/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form class="upd" action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <input type='hidden' name='mg_id' value='<?php echo $_smarty_tpl->tpl_vars['mg_id']->value;?>
' />
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>管理员名称</td>
                    <td><input type="text" name="mg_name" datatype="s3-16" nullmsg="请输入管理员名称！" errormsg="管理员名称长度为3~16个字符！" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_name'];?>
'/></td>
                </tr>
                <tr>
                    <td>角色</td>
                    <td>
                        <select name='mg_role_id' datatype="*" nullmsg="请选择角色。" errormsg="请选择角色。">
                            <option value=''>请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['rinfo']->value,'selected'=>$_smarty_tpl->tpl_vars['role_id']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="确认更新">
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