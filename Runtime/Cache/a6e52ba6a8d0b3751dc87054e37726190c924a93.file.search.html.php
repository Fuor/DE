<?php /* Smarty version Smarty-3.1.6, created on 2015-05-15 15:27:43
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Order\search.html" */ ?>
<?php /*%%SmartyHeaderCode:29794555598dfcc82a8-43339872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e52ba6a8d0b3751dc87054e37726190c924a93' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Order\\search.html',
      1 => 1431674828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29794555598dfcc82a8-43339872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_555598e023534',
  'variables' => 
  array (
    'res' => 0,
    'v' => 0,
    'oinfo' => 0,
    'ninfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555598e023534')) {function content_555598e023534($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>订单查找</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
	        <span>
	            <span style="float: left;">当前位置是：订单管理-》订单查找</span>
	            <span style="float:right;margin-right: 8px;font-weight: bold">
	             <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a></span>
			</span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>订单编号</td>
                        <td>订单商品</td>
                        <td>订单总价</td>
                        <td>购买会员</td>
                        <td>手机号码</td>
                        <td>创建时间</td>
                        <td>订单状态</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['oinfo']->value[$_smarty_tpl->tpl_vars['v']->value['order_no']];?>
……</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ninfo']->value[$_smarty_tpl->tpl_vars['v']->value['user_id']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                        <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['create_time']);?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==0){?>
                        <td>未支付</td>
                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==1){?>
                        <td>已支付</td>
                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==2){?>
                         <td>已发货</td>
                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==3){?>
                        <td>已收货</td>
                        <?php }?>
                        <td>
                        	<a href='<?php echo @__CONTROLLER__;?>
/detail/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
'>详情</a>&nbsp;
                       	<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==0){?>
                        	<a href='<?php echo @__CONTROLLER__;?>
/upd/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
'>修改</a>&nbsp;
                        <?php }?>
                       	<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1){?>
                        	<a href='<?php echo @__CONTROLLER__;?>
/deliver/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
'>发货</a>&nbsp;
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==0||$_smarty_tpl->tpl_vars['v']->value['status']==3){?>
                            <a onclick="return confirm('确定删除？')" href='<?php echo @__CONTROLLER__;?>
/del/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
'>删除</a></td>
                    	<?php }?>
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
    </body>
</html><?php }} ?>