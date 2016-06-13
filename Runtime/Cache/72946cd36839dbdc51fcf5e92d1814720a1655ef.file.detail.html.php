<?php /* Smarty version Smarty-3.1.6, created on 2016-06-12 00:33:26
         compiled from "D:/PHP/wamp/www/DE/Home/View\Goods\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:42845561b7d8ad74e5-20854275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72946cd36839dbdc51fcf5e92d1814720a1655ef' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Goods\\detail.html',
      1 => 1465662789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42845561b7d8ad74e5-20854275',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561b7d911362',
  'variables' => 
  array (
    'pcat' => 0,
    'scat' => 0,
    'info' => 0,
    'row' => 0,
    'vv' => 0,
    'vvv' => 0,
    'volume' => 0,
    'v' => 0,
    'total' => 0,
    'allRevew' => 0,
    'pagelist' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561b7d911362')) {function content_5561b7d911362($_smarty_tpl) {?>        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="<?php echo @__MODULE__;?>
">首页</a> <code>&gt;</code> <a href="#"><?php echo $_smarty_tpl->tpl_vars['pcat']->value['cat_name'];?>
</a> <code>&gt;</code> <a href="<?php echo @__CONTROLLER__;?>
/catlist/id/<?php echo $_smarty_tpl->tpl_vars['scat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['scat']->value['cat_name'];?>
</a> <code>&gt;</code> <?php echo $_smarty_tpl->tpl_vars['info']->value['goods_name'];?>
 
            </div>
        </div>
        <div class="blank"></div>
        <div class="block clearfix">
            <div style="float:left;width:215px;" class="AreaL">
  				<div id="category_tree" class="box_1">
                	<h3><span>全部商品分类</span></h3>
                	<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
	                    <dl>
	                        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['vv']->value['cat_name'];?>
</a></dt>
	                        <dd>   
	                        <?php if ($_smarty_tpl->tpl_vars['vv']->value['childs']){?>
	        					<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_smarty_tpl->tpl_vars['kkk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value){
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
 $_smarty_tpl->tpl_vars['kkk']->value = $_smarty_tpl->tpl_vars['vvv']->key;
?>  
	                            <a href="<?php echo @__CONTROLLER__;?>
/catlist/id/<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vvv']->value['cat_name'];?>
</a>
	                            <?php } ?>
	        				<?php }?>
	                        </dd>
	                    </dl>
                    <?php } ?>
                </div>
                <div class="blank"></div>

                <div style="display: block;" style="width:215px;" class="box" id="history_div">
                    <h3><span >热销榜</span></h3>
                    <div class="box_1" style="width:209px;">
                        <div class="boxCenterList clearfix" id="history_list">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['volume']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>  
                            <ul class="clearfix">
                            	<li class="goodsimg"><a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" class="B_blue"></a></li>
                            	<li><a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a>
                            		<br />本店售价：<font class="f1"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</font>
                            		<br />最近销量：<font class="f1"><?php echo $_smarty_tpl->tpl_vars['v']->value['volume'];?>
</font><br />
                            	</li>
                            </ul>
                        <?php } ?>     
	                    </div>
                    </div>
                </div>
                <div class="blank5"></div>
            </div>
            <div id="goodsBox" class="AreaR">
                <div  id="goodsInfo" class="clearfix">
                    <div class="imgInfo">
                        <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_big_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_name'];?>
" />
                    </div>
                    <div class="textInfo">
<!--                         <form action="<?php echo @__MODULE__;?>
/Cart/addItem" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY"> -->
            				<input type="hidden" id="goods_id" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_id'];?>
" />
                            <div class="goodsName">
                                <input type="hidden" id="goods_name" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_name'];?>
" />
                               <?php echo $_smarty_tpl->tpl_vars['info']->value['goods_name'];?>
      
                            </div>
                            <ul>
                                <li>商品货号：<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_no'];?>
</li> 
                                <li>最近销量：<?php echo $_smarty_tpl->tpl_vars['info']->value['volume'];?>
</li> 
                                <li>商品库存：<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_number'];?>
<input type="hidden" id="goods_number" name="goods_number" disabled value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_number'];?>
"></input></li>  
                                <li>商品重量：<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_weight'];?>
克</li>
                                <li>上架时间：<?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['info']->value['goods_create_time']);?>
</li>
                                <li>商品单价：￥<input id="goods_price" name="goods_price" readonly value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_price'];?>
" style="size:5px; color:red; width:100px; border: 0px solid rgb(255, 255, 255); background-color:white;" ></input></li>
                                <li>
                                    <div class="plus-button">
                                        <span>购买数量：</span>
	                                    <input type="button" class="numDow" onclick="d_minus();" value=" - " />
	                                    <input id="number" class="number" name="number" class="goodNum" readonly value="1" type="text"/>
	                                	<input type="button" class="add" onclick="d_add();" value=" + " />
                                    </div>
                                </li>
                            </ul>
                            <div class="padd">
                                <input id="submit" type="submit" value="加入购物车"/>
                                <div class="padd-success">
                                    
                                </div>
                            </div>
                    </div>
                </div>
                <div class="blank"></div>
                <div class="box">
                    <div class="box_1" >
                        <h3 class="itemDiscribe">商品描述：</h3>
                        <div id="com_v" class="boxCenterList RelaArticle">
                            <p><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['info']->value['goods_introduce']);?>
</p>       
                        </div>
            		</div>
            	</div>
            </div>
             <div class="blank"></div>
                <div class="blank5"></div>
                    <div class="box">
                        <div style="width:878px;float:right;" class="box_1">
                            <h3><span class="text">用户评论</span>(共<font class="f1"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</font>条评论)</h3>
                           
                            <div class="boxCenterList clearfix" style="height: 1%;">
                                <ul class="comments">
                                 <?php if ($_smarty_tpl->tpl_vars['total']->value){?>
                                 	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allRevew']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <li><span style="margin:10px 10px 10px 10px;"><span><b><?php echo substr_replace($_smarty_tpl->tpl_vars['v']->value['username'],'**',2,1);?>
:</b></span><span style="margin-left:20px;font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['review'];?>
</span></span><br/>
                                    	<span style="margin:10px 10px 10px 75px;"><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['add_time']);?>
</span></li>
                                    <?php } ?>
                                 <?php }else{ ?>
                                  <li>暂时还没有任何用户评论</li>
                                 <?php }?>
                                </ul>
                                 <?php if ($_smarty_tpl->tpl_vars['total']->value){?>
                                <div><span><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</span></div>
                                 <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="blank5"></div>
                    
                    <div class="box">
                    <div style="width:1098px;" class="box_1">
                        <h3><span class="text">系统推荐</span></h3>
                        <div class="hotGoods">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <div class="goodsItem">
                                <a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">
                                    <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" class="goodsimg"></a><br />
                                <p><a href="<?php echo @__CONTROLLER__;?>
/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" title="P806"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></p> 
                                <font class="shop_s">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
元</font>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <script src="<?php echo @JS_URL;?>
goods.js"></script>
        <script type="text/javascript">
            $("document").ready(function(){
            	$(function(){
            		var couldRun = true;
		            $("#submit").click(function(){
		            	if(couldRun) {
		                    couldRun = false;
			            	var ajaxurl="<?php echo @__MODULE__;?>
/Cart/addItem";
			            	var datas = {
			            		 'goods_id':$("#goods_id").val(),
			            		 'goods_name':$("#goods_name").val(),
			            		 'goods_price':$("#goods_price").val(),
			            		 'number':+$("#number").val()
			            	}
			            	addItem(ajaxurl,datas);
		            	}
		            });
		            // 一秒后将变为可运行，防止点击过快
		            setInterval(function(){
		                couldRun = true;
		            },1000);
            	});
            });
        </script><?php }} ?>