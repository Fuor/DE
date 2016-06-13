<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller {
	//登录后台
    public function login(){
    	if (!empty($_SESSION['mg_username'])) {
    		$this->redirect('Index/index');
    	}else {
	    	if (!empty($_POST)) {
	    		$verify=new \Think\Verify();
	    		//验证码校验
	    		if (!$verify->check($_POST['captcha'])) {
	    			$this->error('验证码错误。',U('Admin/Manager/login'));
	    		}else {
	    			//验证用户名密码，在model模型制作方法进行验证
	    			$user=new \Model\ManagerModel();
	    			$rst=$user->checkNamePwd($_POST['mg_username'],MD5($_POST['mg_password']));
	    			if ($rst === false) {
	    				$this->error('用户名或密码错误。',U('Admin/Manager/login'));
	    			}else {
	    				//验证通过，存入SESSION
	    				session('mg_username',$rst['mg_name']);
	    				session('mg_id',$rst['mg_id']);
	    				$this->redirect('Index/index');
	    			}
	    		}
	    	}else {
	       		$this->display();
	    	}
    	}
    }
    
    //退出登录
    function logout() {
    	session(null);
		$this->redirect('Manager/login');
    }
    //验证码生成方法
    public function verifyImg() {
    	$config=array(
    			'fontSize'  =>  16,              // 验证码字体大小(px)
    			'imageH'    =>  30,               // 验证码图片高度
    			'imageW'    =>  175,               // 验证码图片宽度
    			'length'    =>  4,               // 验证码位数
    			'useCurve'  =>  false,            // 是否画混淆曲线
    			'useNoise'  =>  false,            // 是否添加杂点
    	);
    	$verify=new \Think\Verify($config);
    	//生成验证码
    	$verify->entry();
    }
    
    //管理员列表
    function showlist() {
    	if (!empty($_SESSION['mg_username'])) {
    		$info=D('Manager')->select();//管理员信息
	    	$rinfo=$this->getRoleInfo();
		    $this->assign('info',$info);
		    $this->assign('rinfo',$rinfo);
		    $this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //管理员添加
    function add() {
    	if (!empty($_SESSION['mg_username'])) {
    		if (!empty($_POST)) {
    			$manager=D('Manager');
    			$manager->create();
    			$manager->mg_time=time();
    			$manager->mg_pwd=MD5($_POST['mg_pwd']);
    			$z=$manager->add();
//     			var_dump($_POST);
//     			exit();
    			if ($z) {
    				$this->success('操作成功',U('showlist'));
    			}else {
    				$this->error('操作失败',U('showlist'));
    			}
    		}else {
		    	//获取角色
		    	$rinfo=$this->getRoleInfo();
		    	$this->assign('rinfo',$rinfo);
		    	
				$this->display();
				}
    	}else {
				$this->error('请登录。',U('Manager/login'));
			}
    }
    
    //管理员角色修改
    function upd($mg_id) {
    	if (!empty($_SESSION['mg_username'])) {
	    	if (!empty($_POST)) {
	    		$manager=D('Manager');
	    		$manager->create();
	    		$z=$manager->save();
	    		if ($z) {
	    			$this->success('操作成功',U('showlist'));
	    		}else {
	    			$this->error('操作失败',U('showlist'));
	    		}
	    	}else {
		    	//获得要修改管理员信息
		    	$info=D('Manager')->find($mg_id);
		    	$rinfo=$this->getRoleInfo();
		    	$this->assign('info',$info);
		    	$this->assign('rinfo',$rinfo);
		    	$this->assign('mg_id',$mg_id);
		    	$this->assign('role_id',$info['mg_role_id']);
		    	$this->display();
	    	}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //删除管理员
    function del($mg_id) {
       	if (!empty($_SESSION['mg_username'])) {
    		$info=M("Manager");
    		$z=$info->where("mg_id='{$mg_id}'")->delete();
    		if ($z) {
    			$this->success('删除成功。',U('showlist'));
    		}else {
    			$this->error('删除失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    function getRoleInfo() {
    	//获取角色信息
    	$rrinfo=D('Role')->select();//角色信息
    	$rinfo=array();
    	foreach ($rrinfo as $k =>$v) {
    		$rinfo[$v['role_id']]=$v['role_name'];
    	}
    	return $rinfo;
    }
    
    //修改密码
    function rePass() {
    	header("Content-type:text/html;charset=utf-8");
    	if (!empty($_SESSION['mg_username'])) {
	    	if (!empty($_POST)) {
	    		//验证用户名密码，在model模型制作方法进行验证
    			$user=new \Model\ManagerModel();
    			$rst=$user->checkNamePwd($_SESSION['mg_username'],MD5($_POST['opassword']));
//     			var_dump(MD5($_POST['opassword']));
//     			exit();
    			if ($rst === false) {
    				$this->error('原密码错误。');
    			}else{
    				$user->create();
    				$user->where("mg_id='{$_SESSION['mg_id']}'")->mg_pwd=MD5($_POST['mg_pwd']);
    				$z=$user->save();
    				if ($z) {
    					session(null);
    					$this->success('修改成功。',U('Manager/login'));
    				}else {
    					$this->error('修改失败，请重试。');
    				}
    			}
	    	}else {
	    		$this->display();
	    	}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    

}
?>