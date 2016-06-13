<?php
namespace Admin\Controller;
use Component\AdminController;
//角色控制器
class RoleController extends AdminController {
	//角色列表
    public function showlist(){
    	if (!empty($_SESSION['mg_username'])) {
	    	$info=D()->table('sw_role')->select();
	    	$this->assign('info',$info);
	    	$this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //添加角色
     public function add(){
     	if (!empty($_SESSION['mg_username'])) {
     		if (!empty($_POST)) {
     			$role=D('Role');
     			$role->create();
     			$z=$role->add();
     			//     			var_dump($_POST);
     			//     			exit();
     			if ($z) {
     				$this->success('操作成功',U('showlist'));
     			}else {
     				$this->error('操作失败',U('showlist'));
     			}
     		}else {
     			$this->display();
     		}
     	}else {
     		$this->error('请登录。',U('Manager/login'));
     	}
     }
     
    //删除角色
    public function del($role_id){
    	if (!empty($_SESSION['mg_username'])) {
    		$info=M("Role");
    		$z=$info->where("role_id='{$role_id}'")->delete();
    		if ($z) {
    			$this->success('删除成功。',U('showlist'));
    		}else {
    			$this->error('删除失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //权限分配
    public function distribute($role_id) {
    	if (!empty($_SESSION['mg_username'])) {
	    	if (!empty($_POST)) {
	    		//利用RoleModel模型中的方法实现权限分配
	    		$role=new \Model\RoleModel();
	    		$z=$role->saveAuth($_POST['authname'],$role_id);
	    		//判断权限分配是否成功
	    		if ($z) {
	    			$this->success('操作成功。',U('showlist'));
	    		}else {
	    			$this->success('操作失败。',U('showlist'));
	    		}
	    	}else {
		    	//查询角色名称
		    	$rinfo=D()->table('sw_role')->getByRole_id($role_id);
		    	$this->assign('role_name',$rinfo['role_name']);
		    	
		    	//查询全部权限信息，然后进行分配
		    	$pauth_info=D('Auth')->where('auth_level=0 and auth_id!=10')->select();//父级权限
		    	$sauth_info=D('Auth')->where('auth_level=1')->select();//子级权限
		    	$ssauth_info=D('Auth')->where('auth_level=2')->select();//子级权限
				
		    	//把当前角色具有的权限信息查询出来
		    	$authinfo=D("Role")->getByRole_id($role_id);
		    	$auth_ids_arr = explode(',',$authinfo['role_auth_ids']);
		    	
		    	$this->assign('pauth_info',$pauth_info);
		    	$this->assign('sauth_info',$sauth_info);
		    	$this->assign('ssauth_info',$ssauth_info);
		    	$this->assign('auth_ids_arr',$auth_ids_arr);
		    	$this->display();
	    	}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
}
?>