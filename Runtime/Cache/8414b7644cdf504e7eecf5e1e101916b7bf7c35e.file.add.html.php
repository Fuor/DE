<?php /* Smarty version Smarty-3.1.6, created on 2015-05-19 21:26:24
         compiled from "D:/PHP/wamp/www/DE/Home/View\Reviews\add.html" */ ?>
<?php /*%%SmartyHeaderCode:66945559f8cc2a1c17-51647617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8414b7644cdf504e7eecf5e1e101916b7bf7c35e' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Reviews\\add.html',
      1 => 1432041956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66945559f8cc2a1c17-51647617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5559f8cc42c4f',
  'variables' => 
  array (
    'order_no' => 0,
    'goods' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559f8cc42c4f')) {function content_5559f8cc42c4f($_smarty_tpl) {?><div class="block box">
    <div class="blank"></div>
    <div id="ur_here"> 当前位置:
		<a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>
		<a href="<?php echo @__MODULE__;?>
/User/myreview">我的评价</a> <code>&gt;</code>添加评价
    	<span style="float:right;margin-right:90px">订单号：<?php echo $_smarty_tpl->tpl_vars['order_no']->value;?>
</span>
    </div>
</div>
<div class="blank"></div>
<div class="block box"></div>

<div class="block clearfix">
	<form action="<?php echo @__SELF__;?>
" method="post">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<div style="width:950px;">
			<div style="float:left;margin-top:20px;width:500px;">
				<ul style="text-align:center;">
					<li>
						<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank">
							<img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="150" width="150" />
						</a>
					</li>
					<li>
						<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank">
							<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>

						</a>
					</li>
				</ul>
			</div>
			<div style="float:left;margin-top:40px;width:450px;">
				<p>
					<input type="radio" checked name="rate[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" id="rate[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="0"/>满意
					<input type="radio" name="rate[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" id="rate[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="1"/>一般
					<input type="radio" name="rate[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" id="rate[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]"  value="2"/>不满意
				</p>
				<textarea name="review[]" placeholder="评论内容" style="width:350px;height:90px;resize: none;"></textarea>
				<!-- 隐藏传递商品ID -->
				<input type="hidden" name="goods_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"/>
				<input type="hidden" name="user_id[]" value="<?php echo $_SESSION['user_id'];?>
"/>
				<input type="hidden" name="add_time[]" value="<?php echo time();?>
"/>
				<input type="hidden" name="order_no" value="<?php echo $_smarty_tpl->tpl_vars['order_no']->value;?>
"/>
			</div>
		</div>
		<?php } ?>
		<div style="clear:both;margin-left:650px"><input style="width:60px;height:30px;" type="submit" value="发表"/></div>
	</form>
</div><?php }} ?>