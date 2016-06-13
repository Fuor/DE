<?php /* Smarty version Smarty-3.1.6, created on 2015-06-01 14:31:33
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Category\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:125815563085cc59803-74128748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c743e1d06edb5e990473a8a6189a61aa3c61a257' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Category\\upd.html',
      1 => 1433071810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125815563085cc59803-74128748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5563085cd72c4',
  'variables' => 
  array (
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5563085cd72c4')) {function content_5563085cd72c4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改分类</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    	<script type="text/javascript" charset="utf-8" src="<?php echo @UEDITOR_JS_URL;?>
ueditor.config.js"></script>
    	<script type="text/javascript" charset="utf-8" src="<?php echo @UEDITOR_JS_URL;?>
ueditor.all.min.js"> </script>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：分类管理-》分类修改</span>
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
                    <td>分类名称</td>
                    <td>
                    	<input type="text" name="cat_name" datatype="s1-6" nullmsg="请输入分类名称！" errormsg="分类名称长度为1~6个字符！" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
" />
                    </td>
                    <td><span class="Validform_checktip"></span></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="修改" />
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
</html><?php }} ?>