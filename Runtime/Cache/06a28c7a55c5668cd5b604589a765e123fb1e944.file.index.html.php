<?php /* Smarty version Smarty-3.1.6, created on 2016-06-12 00:37:44
         compiled from "D:/PHP/wamp/www/DE/Home/View\Cart\index.html" */ ?>
<?php /*%%SmartyHeaderCode:107985561c7a39da596-91202872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06a28c7a55c5668cd5b604589a765e123fb1e944' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Cart\\index.html',
      1 => 1465663062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107985561c7a39da596-91202872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561c7a3e2fc9',
  'variables' => 
  array (
    'cart' => 0,
    'v' => 0,
    'totalPrice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561c7a3e2fc9')) {function content_5561c7a3e2fc9($_smarty_tpl) {?>        <script src="<?php echo @JS_URL;?>
cart.js"></script>
        <style type="text/css">
        
            table {border:1px solid #dddddd; border-collapse: collapse; width:99%; margin:auto;}
            td {border:1px solid #dddddd;}
            #consignee_addr {width:450px;}
        
        </style>

        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code> 购物车
            </div>
        </div>
        <div class="blank"></div>

        <div class="blank"></div>
        <div class="block">
            <div class="flowBox">
                <h6><span>购物车列表</span></h6>
                <?php if (!$_smarty_tpl->tpl_vars['cart']->value){?>
                <div class="block clearfix">
					<div style="width:1095px;height:200px;border:1px solid #ccc;text-align:center;">
						<div style="margin-top:90px;">
							<div style="font-size:14px;">您的购物车空空的，先去逛逛吧。
								<span><a href="<?php echo @__MODULE__;?>
/Goods/catlist">>>去看看</a></span>
							</div>
						</div>
					</div>
				</div>
				<?php }else{ ?>
                <form id="formCart" class="formCart" action="<?php echo @__MODULE__;?>
/Order/index" method="post">
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                                <th>商品名称</th>
                                <th>本店价（元）</th>
                                <th>购买数量</th>
                                <th>小计（元）</th>
                                <th>操作</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <tr>
                                <td>
                                	<div align="left">
                                		<input class="goods_id" name="goods_id[]" datatype="need" nullmsg="请选择要购买的商品。" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" type="checkbox" />
                     					<span class="Validform_checktip"></span>           		
                                	</div>
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
                                <td><input name="goods_price" readonly value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
" style="border:0;height: 20px;text-align: center; ime-mode:disabled;"  type="text" /></td>
                                <td>
                                    <div class="plus-button">
	<!--                                <input onclick="location='<?php echo @__CONTROLLER__;?>
/decNum/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
'" type="button" class="numDow"  value="-" /> -->
	                                	<input type="button" class="numDow" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id']-1;?>
"  value="-" />
	                                    <input name="number" class="number" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
" class="inputBg" type="text" />
	<!--                                <input type="button" class="add" onclick="location='<?php echo @__CONTROLLER__;?>
/incNum/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
'" value="+" /> -->
	                                	<input type="button" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" class="add" value="+" />
                                    </div>
                                </td>
                                <td class="itemSum"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->value['number'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp1*$_tmp2;?>
</td>
                                <td>
                                    <a onclick="return confirm('确定删除？')" href="<?php echo @__CONTROLLER__;?>
/delItem/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" class="f6">删除</a>
                                </td>
                            </tr>
                            <!-- <input name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" type="hidden" />-->
                            <input name="goods_number" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
" type="hidden" />
                            <?php } ?>
                        </tbody></table>
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                        		<td width="50%" align="center"><strong>总金额:<span id="itotalPrice"><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</span></strong></td>
                                <td align="center">
                                    <input onclick="if(confirm('确定清空？')) location='<?php echo @__CONTROLLER__;?>
/clear'" value="清空购物车" class="bnt_blue_1"  type="button" />
                                    <!--  <input name="submit" class="bnt_blue_1" value="更新购物车" type="button" onclick="location='<?php echo @__CONTROLLER__;?>
/modNum'"/>-->
                                </td>
                            </tr>
                        </tbody></table>
                	<table cellpadding="5" cellspacing="0" width="99%">
                    <tbody><tr>
                            <td width="50%" align="center"><input type="button" value="继续购物" style="width:130px;height:40px;" onclick="location='<?php echo @__MODULE__;?>
/Goods/catlist'"/></td>
                            <td align="center"><input type="submit" value="立刻下单" style="width:130px;height:40px;" /></td>
                        </tr>
                    </tbody></table>
                    </form>
                    <?php }?>
            </div>
            <div class="blank"></div>
            <div class="blank5"></div>
        </div>
        
<script type="text/javascript">
$(function(){
	$(function(){
		var de=$(".formCart").Validform({
			tiptype:1,
			datatype:{
				"need":function(gets,obj,curform,regxp){
					var need=1,
						numselected=curform.find("input[name='"+obj.attr("name")+"']:checked").length;
					return  numselected >= need ? true : "请选择要购买的商品";
				},
			}
		});
	});
	
	$(function(){
		//商品减1
		 var couldRun = true;
		 $(".numDow").click(function(e){
			 if(couldRun) {
	            couldRun = false;
	            var el = $(e.target);
	            //alert(el.parents().children('.number:eq(0)').val());
	            var ajaxurl="<?php echo @__CONTROLLER__;?>
/decNums";
	            var datas = {
	                 'goods_id':+el.attr('id')+1,
	            };
	            var num = el.parents().children('.number:eq(0)').val();
	            if(num>=2){
	                decNums(ajaxurl,datas,el);
	            }else{
	                el.unbind();
	                el.attr("disabled",true);
	                el.parents().children('.number:eq(0)').val(1)
	            }
		     }
		 });
	     // 半秒后将变为可运行，防止点击过快
	     setInterval(function(){
	         couldRun = true;
	     },500);
	});
	     
     $(function(){
		 //商品加1
		 var couldRun = true;
		 $(".add").click(function(e){
			 if(couldRun) {
	             couldRun = false;
				 var el = $(e.target);
				 //alert(el.parents().children('.number:eq(0)').val());
		         var ajaxurl="<?php echo @__CONTROLLER__;?>
/incNums";
		         var datas = {
		              'goods_id':+el.attr('id'),
		         };
		         addNums(ajaxurl,datas,el);
		         el.parents().children(".numDow:eq(0)").removeAttr("disabled");
			 }
		 });
         setInterval(function(){
             couldRun = true;
         },500);
     });
	
     $(function(){
    	//直接修改商品数量
		$(".number").change(function(e){
			//alert(1);
			var el = $(e.target);
			var int = /^(\+|-)?\d+$/ ;
			var val = el.val();
			if(!int.test(val) || val<1){
				 el.val(+1);
				 val = el.val();
			}
// 		 el.change(function(){
                var ajaxurl="<?php echo @__CONTROLLER__;?>
/changeNums";
                var datas = {
                          'goods_id':+el.next(".add:eq(0)").attr('id'),
                          'number'  :+val
                     };
                changeNums(ajaxurl,datas,el);
//             });
		});
     });
	 
})
</script><?php }} ?>