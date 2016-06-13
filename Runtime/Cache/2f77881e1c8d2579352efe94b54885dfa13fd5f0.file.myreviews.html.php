<?php /* Smarty version Smarty-3.1.6, created on 2015-05-25 16:03:58
         compiled from "D:/PHP/wamp/www/DE/Home/View\User\myreviews.html" */ ?>
<?php /*%%SmartyHeaderCode:30233555c10a24eb616-78593081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f77881e1c8d2579352efe94b54885dfa13fd5f0' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\User\\myreviews.html',
      1 => 1432541036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30233555c10a24eb616-78593081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_555c10a25fcd5',
  'variables' => 
  array (
    'review' => 0,
    'v' => 0,
    'goods' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c10a25fcd5')) {function content_555c10a25fcd5($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__CONTROLLER__;?>
/index">用户中心</a> <code>&gt;</code>我的评价
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
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
	<div style="float:left;width:82%">
		<div style="margin:5px 30px;width:100%">
			<div>
				<span style="display:inline-block;width:45px;margin-left:15px;font-size:14px;color:blue;">满意度</span>
				<span style="display:inline-block;width:300px;margin-left:60px;font-size:14px;color:blue;">评价</span>
				<span style="display:inline-block;width:300px;margin-left:60px;font-size:14px;color:blue;">商品</span>
			</div>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['review']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<div style="margin:15px 20px;">
				<div style="float:left;">
					<ul>
						<li style="width:45px;">
							<?php if ($_smarty_tpl->tpl_vars['v']->value['rate']==0){?><font color="green">满意</font>
							<?php }elseif($_smarty_tpl->tpl_vars['v']->value['rate']==1){?><font color="blue">一般</font>
							<?php }else{ ?><font color="red">不满意</font>
							<?php }?>
						</li>
					</ul>
				</div>
				<div style="float:left;margin-left:60px;">
					<ul>
						<li style="text-align:left;width:300px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['review'];?>
</li>
						<li style="width:200px;color:#8E8E8E;">[<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['add_time']);?>
]</li>
					</ul>
				</div>
				<div style="float:left;margin-left:60px;">
					<ul>
						<li style="text-align:left;width:300px;">
							<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['v']->value['goods_id']];?>
</a>
						</li>
					</ul>
				</div>
			</div>
			<hr style="margin:0px;width:850px">
		<?php } ?>
		</div>
		 <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

	</div>
</div><?php }} ?>