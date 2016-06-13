<?php /* Smarty version Smarty-3.1.6, created on 2015-05-19 16:12:25
         compiled from "D:/PHP/wamp/www/DE/Home/View\Order\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:285175549f7f82ffb87-47737543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8641dcd26c4d6b273b4d44adbcb875459613c9' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Order\\detail.html',
      1 => 1432023141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285175549f7f82ffb87-47737543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5549f7f835d79',
  'variables' => 
  array (
    'detail' => 0,
    'url' => 0,
    'order_goods' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549f7f835d79')) {function content_5549f7f835d79($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__MODULE__;?>
/User/myorder">我的订单</a> <code>&gt;</code>订单详情
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
	<div class="order_detail1">
		<div>
			<span class="detail">订单号：<?php echo $_smarty_tpl->tpl_vars['detail']->value['order_no'];?>
</span>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['status'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0){?>
			<span style="color:red;" class="detail">订单状态:未支付 &nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">去支付</a></span>
			<hr>
			<span style="margin-left:10px;">您的订单尚未支付，请您及时支付哦。</span>
			<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['status'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?>
			<span style="color:#02DF82;" class="detail">订单状态:已支付</span>
			<hr>
			<span style="margin-left:10px;">您的订单已支付，请等待发货。</span>
			<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['status'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==2){?>
			<span style="color:#0072E3;" class="detail">订单状态:已发货</span>
			<hr>
			<span style="margin-left:10px;">您的订单已发货，包裹已经在路上了，请耐心等候哦。</span>
			<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['status'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==3){?>
			<span style="color:#00E3E3;" class="detail">订单状态:已收货</span>
			<hr>
			<span style="margin-left:10px;">您的订单已确认收货，欢迎进行评价。</span>
			<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['status'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5==4){?>
			<span style="color:#53FF53;" class="detail">订单状态:已评价</span>
			<hr>
			<span style="margin-left:10px;">您的订单已确认收货，欢迎继续选购。</span>
			<?php }}}}}?>
		</div>
	</div>
	<div class="order_detail2">
		<div>
			<div class="detail">
				<span>收货信息</span>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['status'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6>1){?>
					<span style="margin-left:150px;">快递公司：<?php echo $_smarty_tpl->tpl_vars['detail']->value['tracking_type'];?>
</span>
					<span style="margin-left:50px;">快递单号：<?php echo $_smarty_tpl->tpl_vars['detail']->value['tracking_num'];?>
</span>
					<span style="margin-left:50px;"><a href="http://www.kuaidi100.com/chaxun?com=<?php echo $_smarty_tpl->tpl_vars['detail']->value['tracking_type'];?>
&nu=<?php echo $_smarty_tpl->tpl_vars['detail']->value['tracking_num'];?>
" target="_blank">查看物流</a></span>
				<?php }?>
			</div>
			<hr/>
			<div>
				<p class="details">收货人姓名：<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
</p>
				<p class="details">收货人手机：<?php echo $_smarty_tpl->tpl_vars['detail']->value['phone'];?>
</p>
				<p class="details">收货人邮件：<?php echo $_smarty_tpl->tpl_vars['detail']->value['email'];?>
</p>
				<p class="details">收货人邮编：<?php echo $_smarty_tpl->tpl_vars['detail']->value['postcode'];?>
</p>
				<p class="details">收货人地址：<?php echo $_smarty_tpl->tpl_vars['detail']->value['adress'];?>
</p>
			</div>
		</div>
	</div>
	<div class="order_detail2">
		<div class="detail">订单商品</div>
		<hr/>
		<div>
			<ul>
				<li class="good_detail">商品编号</li>
				<li class="good_detail">商品名称</li>
				<li class="good_detail">商品单价</li>
				<li class="good_detail">购买数量</li>
			</ul><br/>
		</div><br/>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<div >
			<ul >
				<li style="width:80px;" class="good_details"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</li>
				<li style="width:350px;margin-left:20px;" class="good_details">
					<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank">
						<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>

					</a>
				</li>
				<li style="width:80px;margin-left:20px;"class="good_details"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</li>
				<li style="width:80px;margin-left:150px;"class="good_details"><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
</li>
			</ul><br/><br/>
		</div>
		<?php } ?>
	</div>
	
	<div class="order_detail2">
	<div>
		<div class="detail">支付信息</div>
		<hr/>
		<div style="text-align:right;">
			<p><span style="font-size:14px;margin-right:15px;">创建时间：<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['detail']->value['create_time']);?>
</span></p><br/>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['detail']->value['status'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7==0){?>
			<p><span style="font-size:14px;margin-right:15px;">支付时间：未支付</span></p><br/>
			<?php }else{ ?>
			<p><span style="font-size:14px;margin-right:15px;">支付时间：<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['detail']->value['pay_time']);?>
</span></p><br/>
			<p><span style="font-size:14px;margin-right:15px;">支付流水：<?php echo $_smarty_tpl->tpl_vars['detail']->value['yborderid'];?>
</span></p><br/>
			<p><span style="font-size:14px;margin-right:15px;">支付银行：<?php echo $_smarty_tpl->tpl_vars['detail']->value['bank'];?>
</span></p><br/>
			<?php }?>
			<p>
				<span style="font-size:14px;font-weight:bold;">订单总额：</span>
				<span style="color:red;font-size:16px;font-weight:bold;margin-right:15px;">￥<?php echo $_smarty_tpl->tpl_vars['detail']->value['price'];?>
</span>
			</p><br/>
		</div>
	</div>
	</div>
</div><?php }} ?>