<?php /* Smarty version Smarty-3.1.6, created on 2015-06-06 00:04:36
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\adress.html" */ ?>
<?php /*%%SmartyHeaderCode:26447554899c67bae18-85133713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53e4669ac72aa4ce55020f6f3cbeb4fdaf7a0dbc' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\adress.html',
      1 => 1433520272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26447554899c67bae18-85133713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554899c69f151',
  'variables' => 
  array (
    'infos' => 0,
    'province' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554899c69f151')) {function content_554899c69f151($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__CONTROLLER__;?>
/index">用户中心</a> <code>&gt;</code>收货地址
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix" style=" border:1px solid #F5F5F5;">
	<div class="AreaL" style="width:17%">
		<h3><span>全部功能</span></h3> 
		<div id="category_tree" class="box_1" style="font-size:14px" >
			<dl>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/info">个人信息</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/myorder">我的订单</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__MODULE__;?>
/Cart/index">去购物车</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/myreviews">我的评价</a>
				</dd>
				<dd>     
				    <a href="<?php echo @__CONTROLLER__;?>
/repass">修改密码</a>
				</dd>
			</dl>
		</div>
	</div>
	
	<!-- 调用JavaScript获取地址表信息 -->
	<script type="text/javascript" src="<?php echo @JS_URL;?>
area.js"></script>
  	<script>var ajaxurl="<?php echo @__CONTROLLER__;?>
/getArea";</script>
  
	<div style="float:left;width:80%;">
		<div style="margin:5px 30px;width:100%">
			<div><span class="info_span"><a style="color:#FFFFFF;text-decoration:none" href="<?php echo @__CONTROLLER__;?>
/info">基本信息</a></span><span class="info_span" style="color:#FF8C00">收货地址</span></div>	
			<hr>
			<form class="info" action="<?php echo @__SELF__;?>
" method="post">
			<div class="info">
				<span class="f5_a">姓&nbsp;名：</span>
				<input name="name" datatype="z2-4" nullmsg="请输入姓名"  errormsg="姓名为2-4个字符" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['name'];?>
" style="font-size:14px;">
				<span class="Validform_checktip"></span>
			</div>
			<div class="info">
				<span class="f5_a">手机号：</span>
				<input name="phone" class="phone"  datatype="m"  nullmsg="请输入手机号" ignore="ignore" errormsg="请填写正确的手机号" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['phone'];?>
"  style="font-size:14px;">
				<span class="Validform_checktip"></span>
			</div>
			<div class="info">
				<span class="f5_a">固&nbsp;话：</span>
				<input name="telephone" datatype="phone" nullmsg="手机与固话必须填写一项！" errormsg="请填写正确的号码！" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['telephone'];?>
"  style="font-size:14px;">
				<span class="Validform_checktip"></span>
			</div>
			<div class="info">
				<span class="f5_a">邮&nbsp;编：</span>
				<input name="postcode" datatype="p" nullmsg="请输入邮编"  errormsg="请填写正确的邮编号" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['postcode'];?>
"  style="font-size:14px;">
				<span class="Validform_checktip"></span>
			</div>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['infos']->value['adress'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
			<div class="f5_a"><span>地&nbsp;址：</span><?php echo $_smarty_tpl->tpl_vars['infos']->value['adress'];?>
</div>
			<?php }else{ ?>
			<div class="f5_a">您还没有设置收货地址，请在下面进行设置。</div>
			<?php }?>
				<div class="info">
				<span class="f5_a">新地址：</span>
					<select name="province" id="province" onchange="loadArea(this.value,'city')">
				        <option value="-1" selected>省份/直辖市</option>
				        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				        	<option name="province" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['area_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</option>
				        <?php } ?>
				    </select>
				    <select name="city" id="city" onchange="loadArea(this.value,'district')">
				        <option value="-1">市/县</option>
				    </select>
				    <select name="district" id="district" onchange="loadArea(this.value,'null')">
				        <option value="-1">镇/区</option>
				    </select>
						<input type="text" name="detail" datatype="*3-64" nullmsg="请输入详细地址"  errormsg="请填写正确的地址" ignore="ignore" placeholder="详细地址" style="width:250px;">
						<span class="Validform_checktip"></span>
					<div class="info">
						<span class="f5_a"></span>
						<!-- 隐藏传递用户ID以便根据ID进行更新 -->
						<input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['infos']->value['user_id'];?>
">
						<input type="submit" value="保存"  style="width:60px;height:30px;font-size:14px;background:#0963c4;color:#fff"></div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$(".info").Validform({
		tiptype:1,
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
</script><?php }} ?>