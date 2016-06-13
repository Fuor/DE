<?php /* Smarty version Smarty-3.1.6, created on 2016-06-12 00:01:52
         compiled from "D:/PHP/wamp/www/DE/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:77315561847c884659-72617716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75d3c4843f176db28a964d7ce533fe31f98cb039' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Index\\index.html',
      1 => 1465660909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77315561847c884659-72617716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5561847cb10c7',
  'variables' => 
  array (
    'row' => 0,
    'v' => 0,
    'vv' => 0,
    'k' => 0,
    'goods' => 0,
    'vvv' => 0,
    'vvvv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561847cb10c7')) {function content_5561847cb10c7($_smarty_tpl) {?>        <div class="blank"></div>
        <div class="block box">

        <div class="block clearfix">

            <div class="AreaL">
                <div id="category_tree" class="box_1">
                	<h3><span>全部商品分类</span></h3>
                	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	                    <dl>
	                        <dt><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a></dt>
	                        <dd>   
	                        <?php if ($_smarty_tpl->tpl_vars['v']->value['childs']){?>
	        					<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>  
	                            <a href="<?php echo @__MODULE__;?>
/Goods/catlist/id/<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['cat_name'];?>
</a>
	                            <?php } ?>
	        				<?php }?>
	                        </dd>
	                    </dl>
                    <?php } ?>
                </div>
                 <div class="focus box clearfix">
                    <div id="focus">
	                    <span class="loading"></span>
	                    <div class="pic">
	                        <ul>
	                            <li>
		                            <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/14">
		                               <img src="<?php echo @IMG_URL;?>
baner1.jpg" alt="粽情山水" />
		                            </a>
	                            </li>
	                            <li>
	                               <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/41">
                                      <img src="<?php echo @IMG_URL;?>
baner2.jpg" alt="海鲜水产" />
                                   </a>
	                            </li>
	                            <li>
	                               <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/1">
                                      <img src="<?php echo @IMG_URL;?>
baner3.jpg" alt="荔枝" />
                                   </a>
	                            </li>
	                            <li>
	                               <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/22">
                                      <img src="<?php echo @IMG_URL;?>
baner4.jpg" alt="酒水" />
                                   </a>
	                            </li>
	                        </ul>
	                    </div>
                    </div>       
                </div>
                <div style="float:left;text-align:center">
	               	<div>
	               		<a href="<?php echo @__MODULE__;?>
/Goods/catlist/id/9">
	               		  <img src="<?php echo @IMG_URL;?>
545069_1_pic270_1964.jpg" width="195px" height="190px" alt="香蕉" />
	               		</a>
	               	</div>
	               	<div style="margin-top:5px;">
	               		<a href="<?php echo @__MODULE__;?>
/Goods/catlist/id/9">进口品质，热情发售</a>
	               	</div>
	               	<div style="margin-top:20px;">
	               		<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/9">
	               		<img src="<?php echo @IMG_URL;?>
556122_1_pic150_3472.jpg" width="195px" height="190px" alt="火龙果" />
	               		</a>
	               	</div>
	               	<div style="margin-top:5px;">
	               		<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/9">精选火龙果，进口品质！</a>
	               	</div>
	            </div>
            </div>
            <div class="AreaM">
                <div class="blank"></div>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <div class="itemTit" id="itemHot">
                    <div class="tit"><font size="6px"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
F</font><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</div>
                     <?php if ($_smarty_tpl->tpl_vars['v']->value['childs']){?>
	        			<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>  
                    <h2 class="h2bg"><a href="<?php echo @__MODULE__;?>
/Goods/catlist/id/<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['vv']->value['cat_name'];?>
</a></h2>
                       <?php } ?>
	        		<?php }?>
                </div>
                <div class="leftImg">
                <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>
                 	<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/10" target="_blank">
                 		<img src="<?php echo @IMG_URL;?>
f1.jpg" width="205px" height="470px" alt="龙眼" />
                 	</a>
                 <?php }elseif($_smarty_tpl->tpl_vars['k']->value==1){?>	
                 	<a href="<?php echo @__MODULE__;?>
/Goods/catlist/id/26" target="_blank">
                 		<img src="<?php echo @IMG_URL;?>
f2.jpg" width="209px" height="470px" alt="牛肉" />
                 	</a>
                 <?php }elseif($_smarty_tpl->tpl_vars['k']->value==2){?>	
                 	<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/26" target="_blank">
                 		<img src="<?php echo @IMG_URL;?>
chongyin.jpg" width="205px" height="470px" alt="鲜奶" />
                 	</a>
                 <?php }elseif($_smarty_tpl->tpl_vars['k']->value==3){?>		
                 	<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/37" target="_blank">
                 		<img src="<?php echo @IMG_URL;?>
f4.jpg" width="205px" height="470px" alt="鳕鱼" />
                 	</a>
                 <?php }elseif($_smarty_tpl->tpl_vars['k']->value==4){?>		
                 	<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/42" target="_blank">
                 		<img src="<?php echo @IMG_URL;?>
shuichan.jpg" width="205px" height="470px" alt="水产" />
                 	</a>
                 <?php }elseif($_smarty_tpl->tpl_vars['k']->value==5){?>		
                 	<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/45" target="_blank">
                 		<img src="<?php echo @IMG_URL;?>
naipin.jpg" width="205px" height="470px" alt="奶品" />
                 	</a>
                 <?php }elseif($_smarty_tpl->tpl_vars['k']->value==6){?>		
                 	<a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/59" target="_blank">
                 		<img src="<?php echo @IMG_URL;?>
qindan.jpg" width="205px" height="470px" alt="禽蛋" />
                 	</a>
				<?php }?>
				</div>
                <div id="show_hot_area" class="clearfix">
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                	<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_smarty_tpl->tpl_vars['kkk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value){
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
 $_smarty_tpl->tpl_vars['kkk']->value = $_smarty_tpl->tpl_vars['vvv']->key;
?>
                	   <?php  $_smarty_tpl->tpl_vars['vvvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvvv']->_loop = false;
 $_smarty_tpl->tpl_vars['kkkk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvvv']->key => $_smarty_tpl->tpl_vars['vvvv']->value){
$_smarty_tpl->tpl_vars['vvvv']->_loop = true;
 $_smarty_tpl->tpl_vars['kkkk']->value = $_smarty_tpl->tpl_vars['vvvv']->key;
?>
                	       <?php if ($_smarty_tpl->tpl_vars['vvvv']->value['goods_category_id']==$_smarty_tpl->tpl_vars['vv']->value['id']){?>
                    <div class="goodsItem">
                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['vvvv']->value['goods_id'];?>
"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['vvvv']->value['goods_small_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['vvvv']->value['goods_name'];?>
" class="goodsimg" ></a><br />
                        <p class="f1"><a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['vvvv']->value['goods_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['vvvv']->value['goods_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['vvvv']->value['goods_name'];?>
</a></p>
                        <font class="f1">￥<?php echo $_smarty_tpl->tpl_vars['vvvv']->value['goods_price'];?>
元</font>
                    </div>
                            <?php }?>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
                </div>
                <?php } ?>
                <div class="blank"></div>
            </div>
        </div>
        </div>
<script type="text/javascript" src="<?php echo @JS_URL;?>
/myfocus/myfocus-2.0.4.full.js"></script>
<script type="text/javascript" src="<?php echo @JS_URL;?>
/index.js"></script>
<script>
</script><?php }} ?>