<?php /* Smarty version Smarty-3.1.6, created on 2015-05-28 23:57:01
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Order\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:77625554aa7e5d97d6-67576038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6283c0a7a92576c1bc244e629180cdd8ac05e00' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Order\\detail.html',
      1 => 1432828615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77625554aa7e5d97d6-67576038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5554aa7e98adb',
  'variables' => 
  array (
    'info' => 0,
    'order_goods' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554aa7e98adb')) {function content_5554aa7e98adb($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>订单详情</title>
    <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style>
	
	.tr_color{background-color: #9F88FF}
	li{list-style-type:none;}
	span{font-size:14px;font-weight:bold;}
	.order_g{display:inline-block;width:200px;margin:0px 5px 15px 0px;text-align:center;}
	.order_g1{display:inline-block;width:200px;font-size:14px;font-weight:normal;margin:0px 5px 15px 0px;text-align:center;}
	.detail{font-size:14px;color:blue;}
	
</style>
<div class="div_head">
	<span>
	    <span style="float: left;">当前位置是：订单管理-》订单详情</span>
	    <span style="float:right;margin-right: 8px;font-weight: bold">
             <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a></span>
	</span>
</div>
<div class="block clearfix">
	<div style="margin-left:70px;">
		<span class="detail">订单号：<?php echo $_smarty_tpl->tpl_vars['info']->value['order_no'];?>
</span>&nbsp;
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['status'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0){?>
		<span style="color:red;" class="detail">订单状态:未支付</span>
		<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['status'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?>
		<span style="color:#02DF82;" class="detail">订单状态:已支付</span>&nbsp;
		<span><a href="<?php echo @__CONTROLLER__;?>
/deliver/order_no/<?php echo $_smarty_tpl->tpl_vars['info']->value['order_no'];?>
">发货</a></span>
		<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['status'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==2){?>
		<span style="color:#0072E3;" class="detail">订单状态:已发货</span>
		<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['status'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==3){?>
		<span style="color:#00E3E3;" class="detail">订单状态:已收货</span>
		<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['info']->value['status'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5==4){?>
		<span style="color:#53FF53;" class="detail">订单状态:已评价</span>
		<?php }}}}}?>
	</div>
	<hr/>
	<div>
		<div class="detail">
			收货信息
			<?php if ($_smarty_tpl->tpl_vars['info']->value['status']>1){?>
			<span style="margin-left:150px;">快递公司：<?php echo $_smarty_tpl->tpl_vars['info']->value['tracking_type'];?>
</span>
			<span style="margin-left:150px;">快递单号：<a href="http://www.kuaidi100.com/chaxun?com=<?php echo $_smarty_tpl->tpl_vars['info']->value['tracking_type'];?>
&nu=<?php echo $_smarty_tpl->tpl_vars['info']->value['tracking_num'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['info']->value['tracking_num'];?>
</a></span>
			<?php }?>
		</div>
		<hr/>
		<div style="margin-left:70px;">
			<p><span>收货姓名：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</p>
			<p><span>手机号码：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
</p>
			<p><span>电子邮件：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
</p>
			<p><span>邮政编码：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['postcode'];?>
</p>
			<p><span>收货地址：</span><?php echo $_smarty_tpl->tpl_vars['info']->value['adress'];?>
</p>
		</div>
	</div>
	<div>
		<div class="detail">订单商品</div>
		<hr/>
		<div>
			<span class="order_g">商品编号</span>
			<span class="order_g">商品名称</span>
			<span class="order_g">商品单价</span>
			<span class="order_g">购买数量</span>
		</div>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<div>
			<span class="order_g1"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</span>
			<span class="order_g1"><a href="/DE/index.php/Home/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></span>
			<span class="order_g1"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</span>
			<span class="order_g1"><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
</span>
		</div>
		<?php } ?>
	</div>
	
	<div>
		<div class="detail">支付信息</div>
		<hr/>
		<div style="margin-left:70px;">
			<div><span style="font-size:14px;margin-right:15px;">创建时间：<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['info']->value['create_time']);?>
</span></div><br/>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['status']>0){?>
			<div><span style="font-size:14px;margin-right:15px;">支付时间：<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['info']->value['pay_time']);?>
</span></div><br/>
			<div><span style="font-size:14px;margin-right:15px;">支付流水：<?php echo $_smarty_tpl->tpl_vars['info']->value['yborderid'];?>
</span></div><br/>
			<div><span style="font-size:14px;margin-right:15px;">支付银行：<?php echo $_smarty_tpl->tpl_vars['info']->value['bank'];?>
</span></div><br/>
			<?php }?>
			<div>
				<span style="font-size:14px;font-weight:bold;">订单金额：</span>
				<span style="color:red;font-size:16px;font-weight:bold;margin-right:15px;">￥<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
</span>
			</div><br/>
		</div>
	</div>
</div>
</body>
</html><?php }} ?>