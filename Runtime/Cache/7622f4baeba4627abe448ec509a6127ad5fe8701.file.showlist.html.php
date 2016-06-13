<?php /* Smarty version Smarty-3.1.6, created on 2015-05-31 20:10:57
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Reviews\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:17171555c763537edb4-34435460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7622f4baeba4627abe448ec509a6127ad5fe8701' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Reviews\\showlist.html',
      1 => 1433074254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17171555c763537edb4-34435460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_555c76355401a',
  'variables' => 
  array (
    'reviews' => 0,
    'v' => 0,
    'goods' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c76355401a')) {function content_555c76355401a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>评价列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
        	
            	.tr_color{background-color: #9F88FF}
        	
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：评价管理-》评价列表</span>
            </span>
        </div>
        <form class="search" action="<?php echo @__CONTROLLER__;?>
/search" method="post">
	        <div style="margin-left:5px;">
	            <span><input name="key" datatype="*" nullmsg="请输入关键词。" errormsg="输入有误。" placeholder="请输入关键词" type="text" /></span><span><input type="submit" value="查找"/></span>
	        </div>
        </form>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>满意度</td>
                        <td>评价内容</td>
                        <td>会员账号</td>
                        <td>评价商品</td>
                        <td>所属订单</td>
                        <td>评价时间</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                        <td>
                        	<?php if ($_smarty_tpl->tpl_vars['v']->value['rate']==0){?><font color="green">满意</font>
							<?php }elseif($_smarty_tpl->tpl_vars['v']->value['rate']==1){?><font color="blue">一般</font>
							<?php }else{ ?><font color="red">不满意</font>
							<?php }?>
						</td>
                        <td style="width:250px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['review'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                        <td>
                        	<a href="/DE/index.php/Home/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['v']->value['goods_id']];?>
</a>
                        </td>
                        <td>
                        	<a href="<?php echo @__MODULE__;?>
/Order/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</a>
                        </td>
                        <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['add_time']);?>
</td>
                        <td>
                        	<a onclick="return confirm('确定删除？')" href="<?php echo @__MODULE__;?>
/Reviews/del/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
                        </td>
                    </tr>
                   <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
   	<script src="<?php echo @JS_URL;?>
jquery-1.8.2.js"></script>
	<script type="text/javascript" src="<?php echo @VALIDFORM_JS_URL;?>
Validform_v5.3.2.js"></script>
    <script type="text/javascript">
		$(function(){
			$(".search").Validform({
				tiptype:2
			});
		})
	</script>
        
    </body>
</html><?php }} ?>