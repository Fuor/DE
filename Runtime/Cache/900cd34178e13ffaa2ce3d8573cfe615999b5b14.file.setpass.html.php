<?php /* Smarty version Smarty-3.1.6, created on 2016-06-06 23:48:39
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\setpass.html" */ ?>
<?php /*%%SmartyHeaderCode:198355557494e874b89-14286244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '900cd34178e13ffaa2ce3d8573cfe615999b5b14' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\setpass.html',
      1 => 1465228085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198355557494e874b89-14286244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5557494e8fd72',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557494e8fd72')) {function content_5557494e8fd72($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>找回密码
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
    <div class="usBox">
        <div class="setpassBox">
			<form id="formLogin" name="formLogin" class="formLogin" action="<?php echo @__SELF__;?>
" method="post">
				<div class="newPass">
				    <input type="password" placeholder="请输入新密码" name="password" size="25" datatype="*6-16" nullmsg="请输入密码！" errormsg="密码范围在6~16位之间！" type="password"/>
				    <span class="Validform_checktip"></span>
				</div>
				<div class="newPass">
				    <input type="password" placeholder="请输入确认密码" recheck="password" datatype="*" name="cpassword" nullmsg="请输入确认密码！" errormsg="两次密码不一致！" type="password"/>
                    <span class="Validform_checktip"></span>
				</div>
				<div class="setpassButton"><input type="submit" value="确定"/></div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(function() {
        $(".formLogin").Validform({
            tiptype : 1
        });
    })
</script><?php }} ?>