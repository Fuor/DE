<?php /* Smarty version Smarty-3.1.6, created on 2016-06-11 18:40:44
         compiled from "D:/PHP/wamp/www/DE/Home/View\Index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1037554339e6164c46-95889469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '412fc1c42afb6b35093bbc415f909a5f039ccee0' => 
    array (
      0 => 'D:/PHP/wamp/www/DE/Home/View\\Index\\header.html',
      1 => 1465641534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1037554339e6164c46-95889469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554339e638b94',
  'variables' => 
  array (
    'num' => 0,
    'totalPrice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554339e638b94')) {function content_554339e638b94($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="Generator" content="YONGDA v1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Keywords" content="在线商城" />
    <meta name="Description" content="在线城" />
    <title>在线商城 - 农副产品仓库</title>
    <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo @JS_URL;?>
jquery-1.8.2.js"></script>
<!--     <script src="<?php echo @JS_URL;?>
jquery-1.6.2.min.js"></script> -->
    <script type="text/javascript" src="<?php echo @VALIDFORM_JS_URL;?>
Validform_v5.3.2.js"></script>
    <script src="<?php echo @JS_URL;?>
common.js"></script>
</head>
<body class="index_body">
<div class="block clearfix" style="position: relative; height: 98px;">
	<a href="<?php echo @__MODULE__;?>
" name="top"><img class="logo" src="<?php echo @IMG_URL;?>
logo.gif" /></a>
	<div id="topNav" class="clearfix">
		<div style="float: right;">&nbsp;
		    <a href="<?php echo @__MODULE__;?>
/Cart/index">查看购物车</a>
		    |
		    <a href="<?php echo @__MODULE__;?>
/Goods/catlist">选购中心</a>
		</div>
		<div style="float: right;"> 
		<?php ob_start();?><?php echo $_SESSION['username'];?>
<?php $_tmp1=ob_get_clean();?><?php if (!empty($_tmp1)){?>
		 	<font id="ECS_MEMBERZONE"><div id="append_parent"></div>
                <font class="f4_b"><?php echo $_SESSION['username'];?>
</font>，欢迎您回来！
                <a href="<?php echo @__MODULE__;?>
/User/index">用户中心</a>
                <a href="<?php echo @__MODULE__;?>
/User/logout">退出</a>
            </font>
            <?php }else{ ?>
		    <font id="ECS_MEMBERZONE">
		        <div id="append_parent"></div>欢迎光临
		        <a href="<?php echo @__MODULE__;?>
/User/login"> 登录</a>
		        |
		        <a href="<?php echo @__MODULE__;?>
/User/register">注册</a>
		        |
		    </font>
		<?php }?>
		</div>
	</div>
    <div id="mainNav" class="clearfix">
        <a href="<?php echo @__MODULE__;?>
">首页<span></span></a>
        <a href="<?php echo @__MODULE__;?>
/Goods/catlist">选购中心<span></span></a>
        <a href="<?php echo @__MODULE__;?>
/Index/life">惠生活<span></span></a>
        <a href="<?php echo @__MODULE__;?>
/Index/sale">促销汇<span></span></a>
        <a href="#">进口专区<span></span></a>
    </div>
    <div class="header_bg">
	<form id="searchForm" method="post" action="<?php echo @__MODULE__;?>
/Goods/search">
	    <input name="keywords" datatype="*" nullmsg="请输入关键词"  errormsg="请输入关键词" placeholder="输入：粽情南北 试试手气吧"  id="keyword" type="text" /><span class="Validform_checktip"></span>
	    <button type="submit">Go</button>
	</form>
	</div>
</div>

<div class="blank5"></div>
<div class="header_bg_b">
    <div class="f_l" style="padding-left: 10px;">
    	<img src="<?php echo @IMG_URL;?>
biao6.gif" />“粽”情南北，不一样的端午风情。<b>今日起下单，端午节前粽子送到家，</b>赶紧行动吧！
	</div>
	<div class="f_r" style="padding-right: 10px;">
		<img class="cart-icon" src="<?php echo @IMG_URL;?>
biao3.gif" />
		<span class="cart" id="ECS_CARTINFO">
		    <a href="<?php echo @__MODULE__;?>
/Cart/index" title="查看购物车">
		      <span id="goodsNum"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</span> 件商品，共 ￥
		      <span id="goodsPrice"><?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</span>元。
		     </a>
		</span>
		<a href="<?php echo @__MODULE__;?>
/Cart/index"><img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao7.gif" /></a>
	</div>
</div><?php }} ?>