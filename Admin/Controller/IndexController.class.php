<?php
namespace Admin\Controller;
use Component\AdminController;
class IndexController extends AdminController {
    public function index(){
    	if (!empty($_SESSION['mg_username'])) {
	    	//首页frameset html 集成方法
	    	$this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    function head() {
    	if (!empty($_SESSION['mg_username'])) {
	    	$this->display();
	    	//var_dump(get_defined_constants(ture));
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    function left() {
    	if (!empty($_SESSION['mg_username'])) {
	    	//根据SESSION用户ID查询角色权限id
	    	$sql="select * from sw_manager where mg_id=".$_SESSION['mg_id'];
	    	$minfo= D()->query($sql);
	    	$role_id= $minfo[0]['mg_role_id'];
// 	    	var_dump($role_id);
// 	    	exit();
	
	    	//根据角色权限id获得权限ids
	    	$sql="select * from sw_role where role_id=".$role_id;
	    	$rinfo= D()->query($sql);
// 	    	
	    	$auth_ids= $rinfo[0]['role_auth_ids'];
	    	
	    	//根据权限ids获得权限
	    	$sql="select * from sw_auth where auth_level=0 ";
	    	if ($_SESSION['mg_id']!=1) {
	    		$sql.="and auth_id in (".$auth_ids.")";
	    	}
	    	$p_info=D()->query($sql);

	    	$sql="select * from sw_auth where auth_level=1 ";
	    	//如果是超级管理员，赋予所有权限
	    	if ($_SESSION['mg_id']!=1) {
	    		$sql.="and auth_id in (".$auth_ids.")";
	    	}
	    	$s_info=D()->query($sql);
// 	    	var_dump($s_info);
// 	    	exit();
			$this->assign('pauth_info',$p_info);
			$this->assign('sauth_info',$s_info);
	    	$this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
	   }
    
    function right() {
    	if (!empty($_SESSION['mg_username'])) {
    		$ma=M("Manager");
    		$manager=$ma->where("mg_id='{$_SESSION['mg_id']}'")->find();
    		//ip地址
    		$ip = get_client_ip();
    		
    		$this->assign("manager",$manager);
    		$this->assign("ip",$ip);
    		$this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
}
?>