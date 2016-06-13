<?php /* Smarty version Smarty-3.1.6, created on 2015-05-15 15:43:02
         compiled from "D:/PHP/wamp/www/DE/Admin/View\User\search.html" */ ?>
<?php /*%%SmartyHeaderCode:299685555a386c261a2-64467289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6335f73d2c696619c93c72e44463390a71f9101d' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\User\\search.html',
      1 => 1431675726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299685555a386c261a2-64467289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5555a387023ee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5555a387023ee')) {function content_5555a387023ee($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员查找</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
			<span style="float: left;">当前位置是：会员管理-》会员查找</span>
        </div>
        <form action="<?php echo @__CONTROLLER__;?>
/search" method="post">
	        <div style="margin-left:5px;">
	            <span><input name="key" placeholder="请输入会员账号" type="text" /></span><span><input type="submit" value="查找"/></span>
	        </div>
        </form>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>用户名</td>
                        <td>姓名</td>
                        <td>姓别</td>
                        <td>邮箱</td>
                        <td>QQ</td>
                        <td>手机</td>
                        <td>固话</td>
                        <td>地址</td>
                        <td>注册时间</td>
                        <td>最后登录时间</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['sex']==0){?>
                        <td>男</td>
                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['sex']==1){?>
                        <td>女</td>
                        <?php }?>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_qq'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['telephone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['adress'];?>
</td>
                        <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['user_time']);?>
</td>
                        <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['last_time']);?>
</td>
                        <td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==0){?>
                        	<a href='<?php echo @__CONTROLLER__;?>
/freeze/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
'>冻结</a>&nbsp;
                       	<?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==1){?>
                       		<a href='<?php echo @__CONTROLLER__;?>
/unfreeze/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
'>解冻</a>&nbsp;
                       	<?php }?>
                            <a onclick="return confirm('确定删除？')" href='<?php echo @__CONTROLLER__;?>
/del/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
'>删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                        <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>