<?php
namespace Model;
use Think\Model;
	//父类model Thinkphp/Library/Think/Model.class.php
	//商品数据模型Model
	class ManagerModel extends Model{
		//校验用户名和密码方法
		function checkNamePwd($name,$pwd) {
			//根据指定字段查询
			$info=$this->getByMg_name($name);
			
			if ($info != null) {
				//密码校验
				if ($info['mg_pwd'] != $pwd) {
					return false;
				}else {
					return $info;
				}
			}else {
				return false;
			}
		}
	}
?>