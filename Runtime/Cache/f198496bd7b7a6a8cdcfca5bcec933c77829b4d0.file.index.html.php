<?php /* Smarty version Smarty-3.1.6, created on 2016-06-07 11:04:24
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:165385561b9cdd2f8e3-30701484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f198496bd7b7a6a8cdcfca5bcec933c77829b4d0' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\index.html',
      1 => 1465268662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165385561b9cdd2f8e3-30701484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561b9cde8b3b',
  'variables' => 
  array (
    'username' => 0,
    'uorder0' => 0,
    'uorder1' => 0,
    'uorder2' => 0,
    'uorder3' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561b9cde8b3b')) {function content_5561b9cde8b3b($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code> 用户中心 
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
	<div class="AreaL" style="width:17%">
		<h3><span>全部功能</span></h3> 
		<div id="category_tree" class="box_1" style="font-size:14px">
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
	<div class="user_center">
		<dl>
			<dt class="f4_b"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</dt>
			<dd>
				<span>未支付订单：<a><?php echo $_smarty_tpl->tpl_vars['uorder0']->value;?>
</a></span>
				<span>待发货订单：<a><?php echo $_smarty_tpl->tpl_vars['uorder1']->value;?>
</a></span>
			</dd>
			<dd>
				<span>待收货订单：<a><?php echo $_smarty_tpl->tpl_vars['uorder2']->value;?>
</a></span>
				<span>待评价订单：<a><?php echo $_smarty_tpl->tpl_vars['uorder3']->value;?>
</a></span>
			</dd>
			<dd>注册时间：<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['user']->value['user_time']);?>
</dd>
            <dd>上次登录：<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['user']->value['last_time']);?>
</dd>
		</dl>
	</div>
	<div style="float:left;width:33%;height:200px;background:#F8F8FF;">
		<div style="float:left;text-align:center;width:100%">
			<ul>
				<li><a href=""><img src="<?php echo @IMG_URL;?>
/b87.jpg" style="width:360px;height:200px;"></a></li>
			</ul>
		</div>
	</div>
</div><?php }} ?>