<?php /* Smarty version Smarty-3.1.6, created on 2015-05-26 17:47:30
         compiled from "D:/PHP/wamp/www/DE/Home/View\Order\checkorder.html" */ ?>
<?php /*%%SmartyHeaderCode:288705561de311ad075-34220499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58a67ec3d04138df8801c6f9619463b6e7c2ab1e' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Order\\checkorder.html',
      1 => 1432477467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288705561de311ad075-34220499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561de3148b72',
  'variables' => 
  array (
    'url' => 0,
    'order_no' => 0,
    'totalprice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561de3148b72')) {function content_5561de3148b72($_smarty_tpl) {?>
        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code>订单支付
            </div>
        </div>
        <div class="block">
          	<form action='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
' method="post"  name="myform"  class="payform">
            <div class="flowBox" style="margin: 0pt auto 70px;">
                <h6 style="text-align: center; height: 30px; line-height: 30px;">感谢您在本店购物！您的订单已提交成功，请记住您的订单号: <font style="color: red;"><?php echo $_smarty_tpl->tpl_vars['order_no']->value;?>
</font>，您的应付款金额为:￥<font style="color: red;"><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</font>元</h6>
                <table style="border: 1px solid rgb(221, 221, 221); margin: 20px auto;" align="center" bgcolor="#ffffff" border="0" cellpadding="15" cellspacing="0" width="99%">
                    <tbody>
                    	<tr>
                            <td align="center" bgcolor="#ffffff">
								 <div class="form-group paytype">
								  	<div class="paylogo">
								  		<label><img src="<?php echo @IMG_URL;?>
yeepay.jpg" /></label><br/>
								  		<label><input type="radio" name="paytypes" value="1" checked="checked"/> 借记卡网银支付</label>
									</div>
								</div>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                        		<div style="text-align: center;">
                        			<input type="submit" value="去支付" onclick="submitpay();return false" style="width:100px;height:40px;font-size:18px;"/>
                        		</div>
                        	</td>
                        </tr>
                    </tbody>
                </table>

            </div>
			</form>
            <p style="text-align: center; margin-bottom: 20px;">您可以 <a href="<?php echo @__MODULE__;?>
">返回首页</a> 或去 <a href="#">用户中心</a></p>
        </div>


<?php }} ?>