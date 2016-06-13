<?php
    //网站根目录
	define("SITE_URL","http://127.0.0.1/DE/");
	//定义css、images、js路径常量
	//前台
	define("CSS_URL",SITE_URL."Public/Home/css/");
	define("IMG_URL",SITE_URL."Public/Home/images/");
	define("JS_URL",SITE_URL."Public/Home/js/");
	
	//后台
	define("ADMIN_CSS_URL",SITE_URL."Public/Admin/css/");
	define("ADMIN_IMG_URL",SITE_URL."Public/Admin/images/");
	define("ADMIN_JS_URL",SITE_URL."Public/Admin/js/");
	
	define("VALIDFORM_JS_URL",SITE_URL."Public/");
	
	//富文本编辑器
	define("UEDITOR_JS_URL",SITE_URL."Public/ueditor/");
	
	//上传图片路径
	define("IMG_UPLOAD",SITE_URL."Public/");

	//把框架模式调为开发模式
	define("APP_DEBUG",true);

	//引入框架核心程序
	require_once '../ThinkPHP/ThinkPHP/ThinkPHP.php';
?>