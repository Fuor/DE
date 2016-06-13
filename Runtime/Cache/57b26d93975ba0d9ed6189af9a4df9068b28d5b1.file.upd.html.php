<?php /* Smarty version Smarty-3.1.6, created on 2015-05-31 19:10:25
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Order\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:225055546c455e4ab9-90136320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b26d93975ba0d9ed6189af9a4df9068b28d5b1' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Order\\upd.html',
      1 => 1433070622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225055546c455e4ab9-90136320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55546c458cae6',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55546c458cae6')) {function content_55546c458cae6($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改订单信息</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：订单管理-》修改订单信息</span>
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
                    <td>订单编号</td>
                    <td><input type="text" name="order_no" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['order_no'];?>
' readonly /></td>
                </tr>
                <tr>
                    <td>订单总价</td>
                    <td><input type="text" name="price" datatype="price" nullmsg="请输入价格！" errormsg="输入有误！" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
'/></td>
                    <span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>收货姓名</td>
                    <td><input type="text" name="name" datatype="z2-4" nullmsg="请输入姓名"  errormsg="姓名为2~4个字的中文" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
'/></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>手机号码</td>
                    <td><input type="text" class="phone" name="phone" datatype="m"  nullmsg="请输入手机号" ignore="ignore" errormsg="请填写正确的手机号" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
'/></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>固定电话</td>
                    <td><input type="text" name="telephone" datatype="phone" nullmsg="手机与固话必须填写一项！" errormsg="请填写正确的号码！" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['telephone'];?>
'/></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>收货地址</td>
                    <td><input type="text" name="adress" datatype="*10-128" nullmsg="请输入收货地址"  errormsg="收货地址必须大于10个字符。" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['adress'];?>
'/></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="确认修改"/>
                    </td>
                </tr>  
            </table>
            </form>
        </div>
        
<script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.2.js"></script>
<script type="text/javascript" src="<?php echo @VALIDFORM_JS_URL;?>
Validform_v5.3.2.js"></script>
<script type="text/javascript">
$(function(){
	$(".upd").Validform({
		tiptype:3,
		datatype:{
		
		"z2-4":/^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/,
		"price":/^(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*))$/,
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