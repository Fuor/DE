<?php /* Smarty version Smarty-3.1.6, created on 2015-05-31 18:49:27
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Order\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:26285554623a48da38-48043753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec7ed5ffccda33e0328a0ca692e8c411dde087c' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Order\\showlist.html',
      1 => 1433069363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26285554623a48da38-48043753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5554623a60c79',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'oinfo' => 0,
    'ninfo' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554623a60c79')) {function content_5554623a60c79($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>订单列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span style="float: left;">当前位置是：订单管理-》订单列表</span>
        </div>
        <form class="search" action="<?php echo @__CONTROLLER__;?>
/search" method="post">
	        <div style="margin-left:5px;">
	            <span><input name="key" datatype="*" nullmsg="请输入关键词。" errormsg="输入有误。" placeholder="请输入订单号或会员账号" type="text" /></span>
	            <span><input type="submit" value="查找"/></span>
	            <span class="Validform_checktip"></span>
	        </div>
        </form>
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
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        <td><font color="red">已支付</font></td>
                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==2){?>
                         <td>已发货</td>
                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==3){?>
                        <td>已收货</td>
                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==4){?>
                        <td>
                        	<a href="<?php echo @__MODULE__;?>
/Reviews/search/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
">已评价</a>
                        </td>
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
                            <a onclick="return confirm('确定删除？')" href='<?php echo @__CONTROLLER__;?>
/del/order_no/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_no'];?>
'>删除</a></td>
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