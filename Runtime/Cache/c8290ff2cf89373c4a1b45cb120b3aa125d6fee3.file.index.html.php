<?php /* Smarty version Smarty-3.1.6, created on 2016-06-09 14:14:37
         compiled from "D:/PHP/wamp/www/DE/Home/View\Order\index.html" */ ?>
<?php /*%%SmartyHeaderCode:37975561dc7b91bb75-30442336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8290ff2cf89373c4a1b45cb120b3aa125d6fee3' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Order\\index.html',
      1 => 1465452864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37975561dc7b91bb75-30442336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561dc7bc6b6c',
  'variables' => 
  array (
    'goods' => 0,
    'v' => 0,
    'allprice' => 0,
    'infos' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561dc7bc6b6c')) {function content_5561dc7bc6b6c($_smarty_tpl) {?>        <script src="<?php echo @JS_URL;?>
order.js"></script>
        <style type="text/css">
        
            table {border:1px solid #dddddd; border-collapse: collapse; width:99%; margin:auto;}
            td {border:1px solid #dddddd;}
            #consignee_addr {width:450px;}
        
        </style>
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code> 购物流程 
            </div>
        </div>
        <div class="blank"></div>
        <div class="blank"></div>
        <div class="block">
            <form class="theForm" action="<?php echo @__MODULE__;?>
/Order/checkorder" method="post" name="theForm" id="theForm" ><!-- 选择快递提醒改用ValidForm 弃用自写的onSubmit="return checkshipping();" -->
                <div class="flowBox">
                    <h6><span>商品列表</span><a href="<?php echo @__MODULE__;?>
/Cart/index" class="f6">修改</a></h6>
                    <table cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th>名称</th>
                                <th>单价</th>
                                <th>数量</th>
                                <th>小计</th>
                            </tr>
                             
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <tr>
                                <td align="center">
                                	<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><img style="width: 80px; height: 80px;" src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" /></a><br />
                                    <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank" class="f6"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a>
                                </td>

                                <td align="center">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
元</td>
                               
                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
</td>
                               
                                <td align="center">￥<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp1*$_tmp2;?>
元</td>
                            </tr>
                            <input type="hidden" name="goods_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" />
							<?php } ?>
                            <tr>
                                <td align="right" colspan="4">合计￥<input type="text" id="allprice" readonly  value="<?php echo $_smarty_tpl->tpl_vars['allprice']->value;?>
" style="border:0;color:red;width:100px;height: 20px;text-align: left; ime-mode:disabled;" /></td>
                            </tr>
                        </tbody></table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>收货人信息</span><a href="<?php echo @__MODULE__;?>
/User/adress" class="f6">修改</a></h6>
                    <table cellpadding="5" cellspacing="1" width="99%">
                        <tbody>
                        	<tr align="center">
                                <td width="10%">收货姓名:</td>
                                <td width="40%"><?php echo $_smarty_tpl->tpl_vars['infos']->value['name'];?>
</td>
                                <td width="10%">电子邮件:</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['user_email'];?>
</td>
                            </tr>
                            <tr align="center">
                                <td>详细地址:</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['adress'];?>
</td>
                                <td>邮政编码:</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['postcode'];?>
</td>
                            </tr>
                            <tr align="center">
                                <td>电话号码:</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['telephone'];?>
</td>
                                <td>手机号码:</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['infos']->value['phone'];?>
</td>
                            </tr>
                        </tbody></table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>配送方式</span></h6>
                    <table id="shippingTable" cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th width="5%"></th>
                                <th width="25%">快递名称</th>
                                <th>快递描述</th>
                                <th width="15%">快递运费</th>
                            </tr>
                            <tr align="center">
                                <td valign="top">
	                                <input datatype="*" nullmsg="请选择快递！" onclick="changeprice()" name="shipping" id="normal" value="12" type="radio" />
	                                <span class="Validform_checktip"></span>
                                </td>
                                <td valign="top"><strong>普通快递</strong></td>
                                <td valign="top">江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元</td>
                                <td align="right" valign="top">￥12.00元</td>
                           </tr>
                           <tr align="center">
                                <td valign="top">
                                    <input onclick="changeprice()" name="shipping" id="sf" value="20" type="radio" />
                                    <span class="Validform_checktip"></span>
                                </td>
                                <td valign="top"><strong>顺丰速运</strong></td>
                                <td valign="top">江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元</td>
                                <td align="right" valign="top">￥20.00元</td>
                           </tr>
                        </tbody></table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>支付方式</span></h6>
                    <table id="paymentTable" cellpadding="5" cellspacing="1" width="99%">
                        <tbody><tr>
                                <th width="5%">&nbsp;</th>
                                <th width="20%">名称</th>
                                <th>描述</th>
                            </tr>

                            <tr align="center">
                                <td valign="top"><input checked="checked" name="payment" value="1" iscod="0" type="radio" /></td>
                                <td valign="top"><strong>在线支付</strong></td>
                                <td valign="top">使用在线支付。通过第三方支付平台易宝支付，使用银行卡网银支付，有卡就能付。</td>
                            </tr>

                        </tbody></table>
                </div>
                <div class="blank"></div>
                <div class="flowBox">
                    <h6><span>费用总计</span></h6>
                    <div id="ecs_ordertotal">应付款金额:￥
                        <input readonly  id="totalprice" name="totalprice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['allprice']->value;?>
" />
                    </div>
					<div class="submitOrder">
                        <input type="submit" value="确认订单"/>
                    </div>
                </div>
                <input type="hidden" name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" />
            </form>
        </div>
        
<script type="text/javascript">
$(function(){
	$(".theForm").Validform({
		tiptype:1,
	});
})
</script><?php }} ?>