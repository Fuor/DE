<?php /* Smarty version Smarty-3.1.6, created on 2016-06-07 13:10:30
         compiled from "D:/PHP/wamp/www/DE/Admin/View\Goods\update.html" */ ?>
<?php /*%%SmartyHeaderCode:1970155619ebb74cec6-70441396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '766f599361ebb33735d29aaade7ffd03c75f6c1f' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Admin/View\\Goods\\update.html',
      1 => 1465276139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970155619ebb74cec6-70441396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55619ebba0446',
  'variables' => 
  array (
    'info' => 0,
    'cat' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55619ebba0446')) {function content_55619ebba0446($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    	<script type="text/javascript" charset="utf-8" src="<?php echo @UEDITOR_JS_URL;?>
ueditor.config.js"></script>
    	<script type="text/javascript" charset="utf-8" src="<?php echo @UEDITOR_JS_URL;?>
ueditor.all.min.js"> </script>
    	<!-- 调用JavaScript获取商品分类信息 -->
        <script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.2.js"></script>
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
cat.js"></script>
		<script>var ajaxurl="<?php echo @__CONTROLLER__;?>
/getCat";</script>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Goods/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form class="upd" action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_id'];?>
" />
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" datatype="*6-64" nullmsg="请输入商品名称！" errormsg="商品名称长度为10~64个字符！" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_name'];?>
" /></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>商品分类</td>
                    <td>
                        <select id="ucat" onchange="loadCat(this.value,'cat')">
				        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				        	<option  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
				        <?php } ?>
					    </select>
					    <select name="goods_category_id" datatype="*" nullmsg="请选择分类！" errormsg="请选择分类！" id="cat" onchange="loadCat(this.value,'null')">
					    	<option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['catid'];?>
">默认分类</option>
					    </select>
                    </td>
                    <span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" datatype="price" nullmsg="请输入价格！" errormsg="输入有误！" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_price'];?>
" /></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>商品货号</td>
                    <td><input type="text" name="goods_no" datatype="*5-64" nullmsg="请输入商品货号！" errormsg="货号长度为5~64位字符！" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_no'];?>
" /></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>商品库存</td>
                    <td><input type="text" name="goods_number" datatype="n1-9999" nullmsg="请输入库存！" errormsg="输入有误！" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_number'];?>
" /></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>商品重量</td>
                    <td><input type="text" name="goods_weight" datatype="n1-9999" nullmsg="请输入重量！" errormsg="输入有误！" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['goods_weight'];?>
" /></td>
                	<span class="Validform_checktip"></span>
                </tr>
                <tr>
                    <td>商品主图</td>
                    <td><input type="file" name="goods_img" /></td>
                </tr>
                <tr>
                    <td>商品描述</td>
                    <td>
                     <script id="editor" name="goods_introduce" type="text/plain" style="width:750px;height:300px;"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['info']->value['goods_introduce']);?>
</script>
                     <script type="text/javascript">
    					//实例化编辑器
    					var ue = UE.getEditor('editor');
    				</script>
                        <!--  <textarea name="goods_introduce" ><?php echo $_smarty_tpl->tpl_vars['info']->value['goods_introduce'];?>
</textarea>-->
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改" />
                    </td>
                </tr>  
            </table>
            </form>
        </div>
        
    <script type="text/javascript" src="<?php echo @VALIDFORM_JS_URL;?>
Validform_v5.3.2.js"></script>
    <script type="text/javascript">
		$(function(){
			$(".upd").Validform({
				tiptype:3,
				datatype:{
					"price":/^(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*))$/,
				}
			});
		})
	</script>
	
    </body>
</html><?php }} ?>