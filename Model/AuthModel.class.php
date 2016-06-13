<?php
namespace Model;
use Think\Model;
//权限模型
class AuthModel extends Model {
	//添加权限方法
	function addAuth($auth) {
		//先插入记录再返回新记录ID以便获得auth_path和auth_level
		$new_id=$this->add($auth);
		
		//判断是否是顶级权限
		if ($auth['auth_pid'] ==0) {
			$auth_path = $new_id;
		}else{
			//查询指定父级全路径
			$pinfo=$this->find($auth['auth_pid']);//查出父级信息
			$p_path=$pinfo['auth_path'];//取得父级全路径
			$auth_path=$p_path."-".$new_id;
		}
		
		//auth_level等于全路径中横杠数或子路径数目减去1
		$auth_level=count(explode('-',$auth_path))-1;
		
		//更新
		$dt=array(
			'auth_id' => $new_id,
			'auth_path' => $auth_path,
			'auth_level' => $auth_level,
		);
		return $this->save($dt);
	}
	
	//修改权限方法
	function updAuth($auth_id,$auth) {
		$this->create();
		$new_id=$this->where("auth_id='{$auth_id}'")->save($auth);
		
		//判断是否是顶级权限
		if ($auth['auth_pid'] ==0) {
			$auth_path = $new_id;
		}else{
			//查询指定父级全路径
			$pinfo=$this->find($auth['auth_pid']);//查出父级信息
			$p_path=$pinfo['auth_path'];//取得父级全路径
			$auth_path=$p_path."-".$new_id;
		}
		
		//auth_level等于全路径中横杠数或子路径数目减去1
		$auth_level=count(explode('-',$auth_path))-1;
		
		//更新
		$dt=array(
			'auth_id' => $new_id,
			'auth_path' => $auth_path,
			'auth_level' => $auth_level,
		);
		$z=$this->save($dt);
		if ($new_id || $z) {
			return true;
		}else {
			return false;
		}
		
	}
	
	public function getInfo($flag=false){
		//$flag=false查询所有信息，否则只查询auth_level<2的信息
		$auth=D('Auth');
		if ($flag=true) {
			$info=D('Auth')->where('auth_level<2')->order('auth_path asc')->select();
		}else {
			$info=D('Auth')->order('auth_path asc')->select();
		}
		//显示权限 层级关系
		foreach ($info as $k => $v){
			$info[$k]['auth_name']=str_repeat('-->',$v['auth_level']).$info[$k]['auth_name'];
		}
		return $info;
	}
}