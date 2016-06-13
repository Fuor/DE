<?php
namespace Model;
use Think\Model;
	//父类model Thinkphp/Library/Think/Model.class.php
	//商品数据模型Model
	class UserModel extends Model{
		//批处理表单认证
		protected $patchValidate     =    true;
		//实现表单项目验证
		//通过重写父类属性$_validate实现表单验证
// 		protected $_validate     =    array(
// 			//验证
// 			array('username','require','用户名不能为空'),
// 			array('password','require','密码不能为空'),
// 			array('password2','require','请输入确认密码'),
// 			array('password2','password','两次密码输入不一致',0,'confirm'),
// 			array('user_email','email','请输入正确的邮箱地址'),
// 			array('user_qq','/^[1-9]\d{4,9}$/','请输入正确的QQ号'),
// 		);
		
		function checkNamePwd($name,$pwd) {
			//根据指定字段查询
			$info=$this->getByUsername($name);
				
			if ($info != null) {
				//密码校验
				if ($info['password'] != $pwd) {
					return false;
				}else {
					return $info;
				}
			}else {
				return false;
			}
		}
		
		//自定义方法验证爱好信息
		//$name是当前被验证项目的信息
		function check_hobby($name) {
			if (count($name)<1) {
				return false;
			}else {
				return true;
			}
		}
	}
?>