<?php
return array(
	//'配置项'=>'配置值'
	//URL模式
		'URL_MODEL'             =>  1,
	
	//让页面显示追踪日志信息
	'SHOW_PAGE_TRASE' => true,
		
	//URL地址大小写访问不敏感
	'URL_CASE_INSENSITIVE' => true,
		
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'shop',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  '',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
	'DB_PARAMS'          	=>  array(), // 数据库连接参数
	'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	'DB_FIELDS_CACHE'        =>  true,        // 启用字段缓存
	'DB_CHARSET'           =>  'utf8',      // 数据库编码默认采用utf8
	
	//修改模板引擎为smart
	'TMPL_ENGINE_TYPE'           =>  'Smarty',
		
		
	//支付宝配置参数
	'alipay_config'=>array(
			'partner' =>'2088402229394267',   //成功申请支付宝接口后获取到的PID；
			'key'=>'i4efrekr24t8f1nxbz4ri1ylwgnfkphf',//成功申请支付宝接口后获取到的Key
			'sign_type'=>strtoupper('MD5'),
			'input_charset'=> strtolower('utf-8'),
			'cacert'=> getcwd().'\\cacert.pem',
			'transport'=> 'http',
	),
	//以上配置项，是从接口包中alipay.config.php 文件中复制过来，进行配置；
	
	'alipay'   =>array(
			//这里是卖家的支付宝账号，也就是申请接口时注册的支付宝账号
			'seller_email'=>'969199173@qq.com',
			//这里是异步通知页面url，提交到项目的Pay控制器的notifyurl方法；
			'notify_url'=>'http://www.de.com/DE/index.php/Home/Order/Pay/notifyurl',
			//这里是页面跳转通知url，提交到项目的Pay控制器的returnurl方法；
			'return_url'=>'http://www.de.com/DE/index.php/Home/Order/Pay/returnurl',
			//支付成功跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参payed（已支付列表）
			'successpage'=>'User/myorder?ordtype=payed',
			//支付失败跳转到的页面，我这里跳转到项目的User控制器，myorder方法，并传参unpay（未支付列表）
			'errorpage'=>'User/myorder?ordtype=unpay',
	),
		
		
	//*************易宝支付配置项*****************//
	// 商户编号
	'merchantaccount' => 'YB01000000144',
	// 商户私钥
	'merchantPrivateKey' => 'MIICdQIBADANBgkqhkiG9w0BAQEFAASCAl8wggJbAgEAAoGBAPGE6DHyrUUAgqep/oGqMIsrJddJNFI1J/BL01zoTZ9+YiluJ7I3uYHtepApj+Jyc4Hfi+08CMSZBTHi5zWHlHQCl0WbdEkSxaiRX9t4aMS13WLYShKBjAZJdoLfYTGlyaw+tm7WG/MR+VWakkPX0pxfG+duZAQeIDoBLVfL++ihAgMBAAECgYAw2urBV862+5BybA/AmPWy4SqJbxR3YKtQj3YVACTbk4w1x0OeaGlNIAW/7bheXTqCVf8PISrA4hdL7RNKH7/mhxoX3sDuCO5nsI4Dj5xF24CymFaSRmvbiKU0Ylso2xAWDZqEs4Le/eDZKSy4LfXA17mxHpMBkzQffDMtiAGBpQJBAPn3mcAwZwzS4wjXldJ+Zoa5pwu1ZRH9fGNYkvhMTp9I9cf3wqJUN+fVPC6TIgLWyDf88XgFfjilNKNz0c/aGGcCQQD3WRxwots1lDcUhS4dpOYYnN3moKNgB07Hkpxkm+bw7xvjjHqI8q/4Jiou16eQURG+hlBZlZz37Y7P+PHF2XG3AkAyng/1WhfUAfRVewpsuIncaEXKWi4gSXthxrLkMteM68JRfvtb0cAMYyKvr72oY4Phyoe/LSWVJOcW3kIzW8+rAkBWekhQNRARBnXPbdS2to1f85A9btJP454udlrJbhxrBh4pC1dYBAlz59v9rpY+Ban/g7QZ7g4IPH0exzm4Y5K3AkBjEVxIKzb2sPDe34Aa6Qd/p6YpG9G6ND0afY+m5phBhH+rNkfYFkr98cBqjDm6NFhT7+CmRrF903gDQZmxCspY',
	// 商户公钥
	'merchantPublicKey' => 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDxhOgx8q1FAIKnqf6BqjCLKyXXSTRSNSfwS9Nc6E2ffmIpbieyN7mB7XqQKY/icnOB34vtPAjEmQUx4uc1h5R0ApdFm3RJEsWokV/beGjEtd1i2EoSgYwGSXaC32ExpcmsPrZu1hvzEflVmpJD19KcXxvnbmQEHiA6AS1Xy/vooQIDAQAB',
	// 易宝公钥
	'yeepayPublicKey' => 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCxnYJL7fH7DVsS920LOqCu8ZzebCc78MMGImzW8MaP/cmBGd57Cw7aRTmdJxFD6jj6lrSfprXIcT7ZXoGL5EYxWUTQGRsl4HZsr1AlaOKxT5UnsuEhA/K1dN1eA4lBpNCRHf9+XDlmqVBUguhNzy6nfNjb2aGE+hkxPP99I1iMlQIDAQAB',
);