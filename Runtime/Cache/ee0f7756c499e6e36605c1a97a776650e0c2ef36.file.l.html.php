<?php /* Smarty version Smarty-3.1.6, created on 2015-05-27 23:01:03
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\l.html" */ ?>
<?php /*%%SmartyHeaderCode:220355565ced1adfbd6-63818829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee0f7756c499e6e36605c1a97a776650e0c2ef36' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\l.html',
      1 => 1432738855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220355565ced1adfbd6-63818829',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5565ced1c04b9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5565ced1c04b9')) {function content_5565ced1c04b9($_smarty_tpl) {?><form class="formLogin" action="">
    <div class="formsub">
    	<ul>
        	<li>
            	<input type="text" value="" name="name" class="inputxt" datatype="s6-18"  errormsg="昵称至少6个字符,最多18个字符！" placeholder="" />
                <div class="Validform_checktip">昵称为6~18个字符</div>
            </li>
            <li>
            	<input type="password" value="" name="userpassword" class="inputxt" datatype="*6-16" nullmsg="请设置密码！" errormsg="密码范围在6~16位之间！" />
                <div class="Validform_checktip">密码范围在6~16位之间</div>
            </li>
            <li>
            	<input type="password" value="" name="userpassword2" class="inputxt" datatype="*" recheck="userpassword" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" />
                <div class="Validform_checktip">两次输入密码需一致</div>
            </li>
        </ul>
        <div class="action">
        	<input type="submit" value="提 交" /> <input type="reset" value="重 置" />
        </div>
    </div>
</form>
<script type="text/javascript">
$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
	$(".formLogin").Validform({
		tiptype:function(msg,o,cssctl){
			if(!o.obj.is("form")){
				var objtip=o.obj.siblings(".Validform_checktip");
				cssctl(objtip,o.type);
				objtip.text(msg);
			}
		}
	});
})
</script>
<script src="<?php echo @JS_URL;?>
jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo @VALIDFORM_JS_URL;?>
Validform_v5.3.2.js"></script>
	<?php }} ?>