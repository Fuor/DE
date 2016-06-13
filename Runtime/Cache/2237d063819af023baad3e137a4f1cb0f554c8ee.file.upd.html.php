<?php /* Smarty version Smarty-3.1.6, created on 2015-06-01 14:34:23
         compiled from "D:/PHP/wamp/www/DE/Admin/View\User\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:1224955571649b5ac52-68178762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2237d063819af023baad3e137a4f1cb0f554c8ee' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\User\\upd.html',
      1 => 1433140458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1224955571649b5ac52-68178762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55571649c125f',
  'variables' => 
  array (
    'infos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55571649c125f')) {function content_55571649c125f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改管理员信息</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet"/>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：会员管理-》修改会员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 15px 15px 15px">
            <form class="upd" action="<?php echo @__SELF__;?>
" method="post">
            <ul>
            	<li class="user_info">会员账号：
            		<input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['username'];?>
"/>
            	</li>
            	<li class="user_info">登录密码：
            		<input type="password" name="password" datatype="s6-64" nullmsg="请输入密码！" errormsg="密码为6~64个字符！" ignore="ignore" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['password'];?>
"/>
            	</li>
            	<li class="check"><span class="Validform_checktip"></span></li>
            	<li class="user_info">会员姓名：
            		<input type="text" name="name" datatype="z2-4" nullmsg="请输入姓名"  errormsg="姓名为2-4个字符" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['name'];?>
"/>
            	</li>
            	<li class="check"><span class="Validform_checktip"></span></li>
            	<li class="user_info">会员性别：
            		<?php if ($_smarty_tpl->tpl_vars['infos']->value['user_sex']==0){?><input type="text" name="sex" datatype="s1-1" nullmsg="请输入性别"  errormsg="请填写正确的性别" value="男"/>
            		<?php }else{ ?><input type="text" name="sex" datatype="s1-1" nullmsg="请输入性别"  errormsg="请填写正确的性别" value="女"/>
            	</li><?php }?>
            	<li class="check"><span class="Validform_checktip"></span></li>
            	<li class="user_info">会员邮箱：
            		<input type="text" name="user_email" datatype="e" nullmsg="请输入邮箱"  errormsg="请填写正确的邮箱账号" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['user_email'];?>
"/>
            	</li>
            	<li class="check"><span class="Validform_checktip"></span></li>
            	<li class="user_info">会员手机：
            		<input type="text" name="phone" class="phone" datatype="m"  nullmsg="请输入手机号" ignore="ignore" errormsg="请填写正确的手机号" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['phone'];?>
"/>
            	</li>
            	<li class="check"><span class="Validform_checktip"></span></li>
            	<li class="user_info">会员固话：
            		<input type="text" name="telephone" datatype="phone" nullmsg="手机与固话必须填写一项！" errormsg="请填写正确的号码！" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['telephone'];?>
"/>
            	</li>
            	<li class="check"><span class="Validform_checktip"></span></li>
            	<li class="user_info">会员地址：
            		<input type="text" name="adress" datatype="*3-64" nullmsg="请填写地址！" errormsg="地址为3~64位字符！" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['adress'];?>
"/>
            	</li>
            	<li class="check"><span class="Validform_checktip"></span></li>
            	<li class="user_info"><input type="submit" value="确认修改"/></li>
            </ul>
            </form>
        </div>
        
   	<script src="<?php echo @JS_URL;?>
jquery-1.8.2.js"></script>
	<script type="text/javascript" src="<?php echo @VALIDFORM_JS_URL;?>
Validform_v5.3.2.js"></script>
    <script type="text/javascript">
		$(function(){
			$(".upd").Validform({
				tiptype:2,
				datatype:{
					
					"z2-4":/^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/,
					"phone":function(gets,obj,curform,regxp){
						var reg1=regxp["m"],
							reg2=/[\d]{7}/,
							phone=curform.find(".phone");
						if(reg1.test(phone.val())){return true;}
						if(reg2.test(gets)){return true;}
						return false;}
					
				}
			});
		})
	</script>
        
    </body>
</html>
<?php }} ?>