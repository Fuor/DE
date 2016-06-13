<?php /* Smarty version Smarty-3.1.6, created on 2015-05-24 21:52:17
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\myorder.html" */ ?>
<?php /*%%SmartyHeaderCode:497555462a8957af71-62756022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '245e2cb87bf302e84017aa8236401445c9569ee1' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\myorder.html',
      1 => 1432475534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497555462a8957af71-62756022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55462a896943b',
  'variables' => 
  array (
    'myorder' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55462a896943b')) {function content_55462a896943b($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__CONTROLLER__;?>
/index">用户中心</a> <code>&gt;</code>我的订单
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
	<div class="AreaL" style="width:17%">
		<h3><span>全部功能</span></h3> 
		<div id="category_tree" class="box_1"  style="font-size:14px">
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
	<div style="float:left;width:82%">
		<div style="margin:5px 30px;width:100%">
			<p>
				<span class="order_span">订单信息</span>
				<span style="width:10%;" class="order_span">收货人</span>
				<span class="order_span">支付金额</span>
				<span class="order_span">创建时间</span>
				<span style="width:10%;" class="order_span">订单状态</span>
				<span style="width:16%;" class="order_span">操作</span>
			</p>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myorder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<p>
				<span class="order_list">订单号：<br/><a href="<?php echo @__MODULE__;?>
/Order/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</a></span>
				<span style="width:10%;" class="order_list"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
				<span class="order_list"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
元</span>
				<span class="order_list"><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['create_time']);?>
</span>
				<span style="width:10%;" class="order_list">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==0){?>
					未支付
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==1){?>
					已支付
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==2){?>
					已发货
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==3){?>
					已收货
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5==4){?>
					已评价
				<?php }}}}}?>
				</span>
				<span style="width:16%;" class="order_list">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6==0){?>
					<a href="<?php echo @__MODULE__;?>
/Order/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">查看</a>
					|<a onclick="return confirm('确定删除？')" href="<?php echo @__MODULE__;?>
/Order/deleteOrder/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">删除</a>
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7==1){?>
					<a href="<?php echo @__MODULE__;?>
/Order/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">查看</a>
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8==2){?>
					<a href="<?php echo @__MODULE__;?>
/Order/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">查看</a>
					|<a href="http://www.kuaidi100.com/chaxun?com=<?php echo $_smarty_tpl->tpl_vars['v']->value['tracking_type'];?>
&nu=<?php echo $_smarty_tpl->tpl_vars['v']->value['tracking_num'];?>
" target="_blank">物流</a>
					|<a onclick="return confirm('确定已经收到货了？')" href="<?php echo @__MODULE__;?>
/Order/receipt/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">确认收货</a>
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9==3){?>
					<a href="<?php echo @__MODULE__;?>
/Order/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">查看</a>
					|<a href="<?php echo @__MODULE__;?>
/Reviews/add/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">评价</a>
					|<a onclick="return confirm('确定删除？')" href="<?php echo @__MODULE__;?>
/Order/deleteOrder/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">删除</a>
				<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10==4){?>
					<a href="<?php echo @__MODULE__;?>
/Order/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">查看</a>
					|<a href="<?php echo @__MODULE__;?>
/Reviews/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">已评价</a>
					|<a onclick="return confirm('确定删除？')" href="<?php echo @__MODULE__;?>
/Order/deleteOrder/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">删除</a>
				<?php }}}}}?>
				</span>
			</p>
			<hr style="margin:0px;width:850px">
		<?php } ?>
		</div>
		 <div style="float:right;"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</div>
	</div>
</div><?php }} ?>