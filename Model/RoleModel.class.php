<?php
namespace Model;
use Think\Model;
//权限分配模型
class RoleModel extends Model {
	function saveAuth($auth,$role_id) {
		//把数组中的ID信息变为中间带逗号的字符串信息
		$auth_ids=implode(',',$auth);
		//根据ids查询权限方法
		$info=D('Auth')->select($auth_ids);
// 		var_dump($info);
// 		exit();
		//拼装控制器和相应方法
		$auth_ac='';
		foreach ($info as $k=>$v){
			//不为空就返回控制器和方法
			if (!empty($v['auth_c']) && !empty($v['auth_a'])) {
				$auth_ac.=$v['auth_c']."-".$v['auth_a'].",";
			}
		}
		$auth_ac=rtrim($auth_ac,',');//删除返回信息中最右边的逗号
		//执行更新操作
		$dt=array(
			'role_id'=>$role_id,
			'role_auth_ids'=>$auth_ids,
			'role_auth_ac'=>$auth_ac,
		);
		return $this->save($dt);
	}
}