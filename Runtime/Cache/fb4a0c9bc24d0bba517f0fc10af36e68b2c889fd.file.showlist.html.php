<?php /* Smarty version Smarty-3.1.6, created on 2015-05-26 13:23:44
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:152025564036068fa89-38411626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb4a0c9bc24d0bba517f0fc10af36e68b2c889fd' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Manager\\showlist.html',
      1 => 1431580414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152025564036068fa89-38411626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'rinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5564036080e7e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5564036080e7e')) {function content_5564036080e7e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：管理员管理-》管理员列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/Manager/add">【添加管理员】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>管理员名称</td>
                        <td>角色</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['rinfo']->value[$_smarty_tpl->tpl_vars['v']->value['mg_role_id']];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['mg_id']>1){?>
                        <td><a href='<?php echo @__CONTROLLER__;?>
/upd/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
'>修改</a>&nbsp;
                            <a onclick="return confirm('确定删除？')" href='<?php echo @__CONTROLLER__;?>
/del/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
'>删除</a></td>
                   		<?php }?>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>