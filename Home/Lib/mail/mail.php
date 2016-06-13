<?php
require_once('class.phpmailer.php');
	class mail{
		function sendMail($subject,$address,$body) {
			$mail = new PHPMailer(); //实例化
			$mail->IsSMTP(); // 启用SMTP
			$mail->Host = "smtp.qq.com"; //SMTP服务器 
			$mail->SMTPSecure = "ssl";//安全协议
			$mail->Port = 465;  //邮件发送端口
			$mail->SMTPAuth   = true;  //启用SMTP认证
			
			$mail->CharSet  = "UTF-8"; //字符集
			$mail->Encoding = "base64"; //编码方式
			
			$mail->Username = "2545543582@qq.com";  //网站发件邮箱
			$mail->Password = "hhpqxrkyuodrdjij";  //密码
			$mail->Subject = $subject; //邮件标题
			
			$mail->From = "2545543582@qq.com";  //发件人地址（也就是网站发件邮箱）
			$mail->FromName = "德商城";  //发件人姓名
			
	// 		$address = "";//收件人email
			$mail->AddAddress($address, "亲爱的");//添加收件人（地址，昵称）
			
			// $mail->AddAttachment('xx.xls','我的附件.xls'); // 添加附件,并指定名称
			$mail->IsHTML(true); //支持html格式内容
			$mail->AddEmbeddedImage("logo.jpg", "my-attach", "logo.jpg"); //设置邮件中的图片
			$mail->Body = $body; //邮件主体内容
			
			//状态
			if(!$mail->Send()) {
				return false;
			} else {
				return true;
			}
		}
	}
?>