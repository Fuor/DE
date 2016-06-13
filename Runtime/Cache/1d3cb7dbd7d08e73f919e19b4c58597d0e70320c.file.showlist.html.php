<?php /* Smarty version Smarty-3.1.6, created on 2016-06-06 17:46:32
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Category\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1614055583e8e952767-34249616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d3cb7dbd7d08e73f919e19b4c58597d0e70320c' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Category\\showlist.html',
      1 => 1465205328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1614055583e8e952767-34249616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55583e8eba826',
  'variables' => 
  array (
    'row' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55583e8eba826')) {function content_55583e8eba826($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>商品分类列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
        	
            	.tr_color{background-color: #ECFFFF}
            	.cat{list-style:none;margin:5px 5px}
        	
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品分类管理-》分类列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/add">【添加一级分类】</a>
                </span>
            </span>
        </div>
        <div style="font-size: 14px; margin: 10px 5px;">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        	<div class="tr_color">
        		<ul>
	        		<li class="cat">
	        			<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
&nbsp;&nbsp;
	        			<span style="float:right;">
		        			<a href="<?php echo @__CONTROLLER__;?>
/add/uid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="text-decoration:none"><input type="button" value="+"></input></a>
		        			<a href="<?php echo @__CONTROLLER__;?>
/upd/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><input type="button" value="修改"></input></a>
		        			<a href="<?php echo @__CONTROLLER__;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><input type="button" value="删除"></input></a>
	        			</span>
	        		</li>               
	        		<?php if ($_smarty_tpl->tpl_vars['v']->value['childs']){?>
	        			<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
        			<li class="cat">
        				<span>—</span>
        				<a href="<?php echo @__CONTROLLER__;?>
/detail/id/<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['cat_name'];?>
</a>
        				<span style="float:right;">
        					<a href="<?php echo @__CONTROLLER__;?>
/upd/id/<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"><input type="button" value="修改"></input></a>
        					<a href="<?php echo @__CONTROLLER__;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"><input type="button" value="删除"></input></a>
        				</span>
        			</li>
	        			<?php } ?>
	        		<?php }?>
        		</ul>
        	</div>
        <?php } ?>
        </div>
    </body>
</html><?php }} ?>