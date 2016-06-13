<?php /* Smarty version Smarty-3.1.6, created on 2015-05-26 13:49:40
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Index\right.html" */ ?>
<?php /*%%SmartyHeaderCode:202735561d8a85e7601-39339555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd4425aeabaef9b7561ec6b8395e0ba9617e2586' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Index\\right.html',
      1 => 1432619377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202735561d8a85e7601-39339555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561d8a87ac87',
  'variables' => 
  array (
    'ip' => 0,
    'manager' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561d8a87ac87')) {function content_5561d8a87ac87($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\PHP\\wamp\\www\\ThinkPHP\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" align=center border=0>
            <tr height=28>
                <td background=<?php echo @ADMIN_IMG_URL;?>
title_bg1.jpg>当前位置: </td></tr>
            <tr>
                <td bgcolor=#b1ceef height=1></td></tr>
            <tr height=20>
                <td background=<?php echo @ADMIN_IMG_URL;?>
shadow_bg.jpg></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="90%" align=center border=0>
            <tr height=100>
                <td align=middle width=100><img height=100 src="<?php echo @ADMIN_IMG_URL;?>
admin_p.gif" 
                                                width=90></td>
                <td width=60>&nbsp;</td>
                <td>
                    <table height=100 cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td>当前时间：<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
</td></tr>
                        <tr>
                            <td style="font-weight: bold; font-size: 16px"><?php echo $_SESSION['mg_username'];?>
</td></tr>
                        <tr>
                            <td>欢迎进入网站管理中心！</td></tr></table></td></tr>
            <tr>
                <td colspan=3 height=10></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="95%" align=center border=0>
            <tr height=20>
                <td></td></tr>
            <tr height=22>
                <td style="padding-left: 20px; font-weight: bold; color: #ffffff" 
                    align=middle background=<?php echo @ADMIN_IMG_URL;?>
title_bg2.jpg>您的相关信息</td></tr>
            <tr bgcolor=#ecf4fc height=12>
                <td></td></tr>
            <tr height=20>
                <td></td></tr></table>
        <table cellspacing=0 cellpadding=2 width="95%" align=center border=0>
            <tr>
                <td align=right width=100>登陆帐号：</td>
                <td style="color: #880000"><?php echo $_SESSION['mg_username'];?>
</td></tr>
            <tr>
                <td align=right>IP地址：</td>
                <td style="color: #880000"><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
</td></tr>
            <tr>
                <td align=right>注册时间：</td>
                <td style="color: #880000"><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['manager']->value['mg_time']);?>
</td></tr>
        </table>
    </body>
</html><?php }} ?>