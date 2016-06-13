<?php /* Smarty version Smarty-3.1.6, created on 2015-06-01 14:25:49
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Goods\search.html" */ ?>
<?php /*%%SmartyHeaderCode:199525555ae6b594733-16710990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b53be27b38ae5da17d4b3feaac36930e87a00d' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Goods\\search.html',
      1 => 1433139927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199525555ae6b594733-16710990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5555ae6b80964',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5555ae6b80964')) {function content_5555ae6b80964($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>商品查找</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
        	
            	.tr_color{background-color: #9F88FF}
        	
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品查找</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品货号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>创建时间</td>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_no'];?>
</td>
                        <td><a href="/DE/index.php/Home/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>
                        <td>
                        	<a href="/DE/index.php/Home/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"  target="_blank">
                        	<img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" height="60" width="60" />
                        	</a>
                        </td>
                        <td>
                        	<a href="/DE/index.php/Home/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"  target="_blank">
                        	<img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="40" width="40" />
                        	</a>
                        </td>
                        <td><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['goods_create_time']);?>
</td>
                         <td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==0){?>
                        	<a href="<?php echo @__MODULE__;?>
/Goods/up/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" >上架</a>
                        <?php }else{ ?>	
                        	<a href="<?php echo @__MODULE__;?>
/Goods/down/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" >下架</a>
                        <?php }?>	
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['hot']==0){?>
                        	<a href="<?php echo @__MODULE__;?>
/Goods/is_hot/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" >推荐</a>
                        <?php }else{ ?>	
                        	<a href="<?php echo @__MODULE__;?>
/Goods/not_hot/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" >取消推荐</a>
                        <?php }?>	
                        	<a href="<?php echo @__MODULE__;?>
/Goods/update/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" >修改</a>
                        	<a onclick="return confirm('确定删除？')" href="<?php echo @__MODULE__;?>
/Goods/del/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
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
    </body>
</html><?php }} ?>