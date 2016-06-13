<?php
namespace Admin\Controller;
use Component\AdminController;
//角色控制器
class AuthController extends AdminController {
	//权限列表
    public function showlist(){
    	if (!empty($_SESSION['mg_username'])) {
    		$auth=new \Model\AuthModel();
	    	$info=$auth->getInfo(false);
	    	$this->assign('info',$info);
	    	$this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //新增权限
    public function add() {
    	if (!empty($_SESSION['mg_username'])) {
    		$auth=new \Model\AuthModel();
	    	if (!empty($_POST)) {
	    		$z=$auth->addAuth($_POST);
	    		if ($z) {
	    			$this->success('操作成功',U('showlist'));
	    		}else{
	    			$this->success('操作失败',U('showlist'));
	    		}
	    	}else {
		    	$info=$auth->getInfo(true);
		    	$authinfo=array();
		    	foreach ($info as $k => $v){
		    		$authinfo[$v['auth_id']]=$v['auth_name'];
		    	}
		    	$this->assign('authinfo',$authinfo);
		    	$this->display();
	    	}
	    }else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //修改权限
    public function upd($auth_id) {
    	if (!empty($_SESSION['mg_username'])) {
    		$auth=new \Model\AuthModel();
	    	if (!empty($_POST)) {
	    		$z=$auth->updAuth($auth_id,$_POST);
	    		if ($z) {
	    			$this->success('更新成功',U('showlist'));
	    		}else{
	    			$this->error('更新失败',U('showlist'));
	    		}
	    	}else {
	    		$info=$auth->where("auth_id='{$auth_id}'")->find();
		    	
	    		$infos=$auth->getInfo(true);
	    		$authinfo=array();
	    		foreach ($infos as $k => $v){
	    			$authinfo[$v['auth_id']]=$v['auth_name'];
	    		}
	    		$this->assign('authinfo',$authinfo);
		    	$this->assign('info',$info);
		    	$this->display();
	    	}
	    }else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //删除权限
    public function del($auth_id){
    	if (!empty($_SESSION['mg_username'])) {
    		$auth=M("Auth");
    		$z=$auth->where("auth_id='{$auth_id}'")->delete();
    		if ($z) {
    			$this->success('删除成功。',U('showlist'));
    		}else {
    			$this->error('删除失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
}
?>