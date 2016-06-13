<?php
namespace Admin\Controller;
use Component\AdminController;
class UserController extends AdminController {
    //会员列表
    function showlist() {
    	if (!empty($_SESSION['mg_username'])) {
    		$user=M("User");
    		//分页
    		//1.获取记录总条数
    		$total=$user->count();
    		$per=15;
    		$page = new \Component\page($total,$per);
    		//3.拼接SQL语句
    		$sql="select * from sw_user ".$page->limit;
    		$info=$user->query($sql);
    		//4.页码列表
    		$pagelist= $page-> fpage();
    		
		    $this->assign('info',$info);
		    $this->assign('pagelist',$pagelist);
		    $this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //会员查找
    function search() {
    	if (!empty($_SESSION['mg_username'])) {
    		if (!empty($_POST)) {
    			$key=$_POST['key'];
    			//获取会员账户名
    			$info=D('user')->where("username='{$key}'")->select();
    			if ($info) {
    				$this->assign('info',$info);
    			}else {
    				$this->error('没有查到。',U('showlist',5));
    			}
    			$this->display();
    		}else {
    			$this->error('请输入查找条件。',U('showlist'),5);
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }

    //冻结会员
    function freeze($user_id) {
		if (!empty($_SESSION['mg_username'])) {
			$user=M("User");
			$user->status=2;
			$z=$user->where("user_id='{$user_id}'")->save();
    		if ($z) {
    			$this->success('冻结成功。',U('showlist'));
    		}else {
    			$this->error('冻结失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //解冻会员
    function unfreeze($user_id) {
    	if (!empty($_SESSION['mg_username'])) {
    		$user=M("User");
    		$user->status=1;
    		$z=$user->where("user_id='{$user_id}'")->save();
    		if ($z) {
    			$this->success('解冻成功。',U('showlist'));
    		}else {
    			$this->error('解冻失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //删除会员
    function del($user_id) {
       	if (!empty($_SESSION['mg_username'])) {
    		$user=M("User");
    		$z=$user->where("user_id='{$user_id}'")->delete();
    		if ($z) {
    			$this->success('删除成功。',U('showlist'));
    		}else {
    			$this->error('删除失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //修改会员
    function upd($user_id) {
       	if (!empty($_SESSION['mg_username'])) {
    		$info=M("User");
       		if (!empty($_POST)){
		  			$info->create();
		  			//性别转换
		  			if ($_POST['sex']) {
		  				$sex=$_POST['sex'];
// 		  				var_dump($sex);
// 		  				exit();
		  				if ($sex=='男') {
		  					$info->user_sex=0;
		  				}elseif($sex=='女'){
		  					$info->user_sex=1;
		  				}
		  			}
		  			$info->password=MD5($_POST['password']);
		  			$rst=$info->where("user_id='{$user_id}'")->save();
// 		  			var_dump();
// 		  			exit();
		  			if ($rst) {
		  				$this->success('更新成功。',U('showlist'));
		  			}else {
		  				$this->error('更新失败。',U('showlist'));;
		  			}
       		}else{
// 		  		var_dump($user_id);
// 		  		exit();
       			$infos=$info->where("user_id='{$user_id}'")->find();
		  		$this->assign('infos',$infos);
		  		$this->display();
       		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
}
?>