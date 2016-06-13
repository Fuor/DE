<?php /* Smarty version Smarty-3.1.6, created on 2015-05-31 19:29:47
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Category\add.html" */ ?>
<?php /*%%SmartyHeaderCode:8027555886273b1e33-25004164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b185644c7e6e6fab96585067ee4269e164b71a1' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Category\\add.html',
      1 => 1433071753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8027555886273b1e33-25004164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5558862751560',
  'variables' => 
  array (
    'cate' => 0,
    'uid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5558862751560')) {function content_5558862751560($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加分类</title>
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
                <span style="float:left">当前位置是：分类管理-》<?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_name'];?>
-》添加分类</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form class="add" action="<?php echo @__SELF__;?>
" method="post">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>分类名称</td>
                    <td><input type="text" name="cat_name" datatype="s1-6" nullmsg="请输入分类名称。" errormsg="分类名称为1~6个字符。" />
                    	<span class="Validform_checktip"></span>
                    <?php if ($_smarty_tpl->tpl_vars['uid']->value){?>
                    <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"/>
                    <?php }?>
                    </td>
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
</html><?php }} ?>