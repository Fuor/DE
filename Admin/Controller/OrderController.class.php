<?php
namespace Admin\Controller;
use Component\AdminController;
class OrderController extends AdminController {
    //订单列表
    function showlist() {
    	if (!empty($_SESSION['mg_username'])) {
    		$order=M("Order");
    		//分页
    		//1.获取记录总条数
    		$total=$order->count();
    		$per=15;
    		$page = new \Component\page($total,$per);
    		//3.拼接SQL语句
    		$sql="select * from sw_order order by create_time desc ".$page->limit;
    		$info=$order->query($sql);
    		//4.页码列表
    		$pagelist= $page-> fpage();
    		
    		//获取会员账户名
    		$uinfo=D('user')->select();
    		$ninfo=array();
    		foreach ($uinfo as $k =>$v) {
    			$ninfo[$v['user_id']]=$v['username'];
    		}
    		
    		//订单商品
    		$order_good=D("order_goods");
    		$order_goods=$order_good->select();
    		$oinfo=array();
    		foreach ($order_goods as $k =>$v) {
    			$oinfo[$v['order_no']]=$v['goods_name'];
    		}
    		
		    $this->assign('info',$info);
		    $this->assign('ninfo',$ninfo);
		    $this->assign('oinfo',$oinfo);
		    $this->assign('pagelist',$pagelist);
		    $this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //订单详情
    function detail($order_no) {
    if (!empty($_SESSION['mg_username'])) {
	    	//订单信息
	    	$info=D('Order')->where("order_no='{$order_no}'")->find();
	    	
	    	//订单商品
	    	$order_good=D("order_goods");
	    	$order_goods=$order_good->where("order_no='{$order_no}'")->select();
	    	
	    	$this->assign('info',$info);
	    	$this->assign('order_goods',$order_goods);
	    	$this->display();
	    	
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //删除订单
    function del($order_no) {
       	if (!empty($_SESSION['mg_username'])) {
       		//删除订单
    		$order=M("Order");
    		$z=$order->where("order_no='{$order_no}'")->delete();
    		//删除订单商品
    		$order_goods=M("Order_goods");
    		$r=$order_goods->where("order_no='{$order_no}'")->delete();
    		if ($z && $r) {
    			$this->success('删除成功。',U('showlist'));
    		}else {
    			$this->error('删除失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //修改订单
    function upd($order_no) {
    	if (!empty($_SESSION['mg_username'])) {
    		if (!empty($_POST)) {
    			$order=D('Order');
	    		$order->create();
	    		$z=$order->where("order_no='{$order_no}'")->save();
	    		if ($z) {
	    			$this->success('操作成功',U('showlist'));
	    		}else {
	    			$this->error('操作失败',U('showlist'));
	    		}
	    	}else {
		    	//获得要修改订单信息
		    	$info=D('Order')->where("order_no='{$order_no}'")->find();
		    	$this->assign('info',$info);
		    	$this->display();
	    	}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //订单发货
    function deliver($order_no) {
    	if (!empty($_SESSION['mg_username'])) {
    		if (!empty($_POST)) {
    			$order=D('Order');
	    		$order->create();
	    		$order->status=2;
	    		$z=$order->where("order_no='{$order_no}'")->save();
	    		if ($z) {
	    			$this->success('操作成功',U('showlist'));
	    		}else {
	    			$this->error('操作失败',U('showlist'));
	    		}
	    	}else {
		    	//获得要修改订单信息
		    	$info=D('Order')->where("order_no='{$order_no}'")->find();
		    	$this->assign('info',$info);
		    	$this->display();
	    	}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //订单查找
    function search() {
    	if (!empty($_SESSION['mg_username'])) {
    		if (!empty($_POST)) {
    			$key=$_POST['key'];
    			
    			$order=D('Order');
    			$res=$order->where("order_no='{$key}'")->select();
    			if ($res) {
    				$this->assign('res',$res);
    			}else {
    				//获取会员账户名
    				$user=D('user')->where("username='{$key}'")->find();
    				if ($user) {
    					$res=$order->where("user_id='{$user['user_id']}'")->select();
    					if ($res) {
    						$this->assign('res',$res);
    					}else {
    						$this->error('没有查到。',U('showlist',5));
    					}
    				}else {
    					$this->error('没有查到。',U('showlist',5));
    				}
    				
    			}
    			//订单商品
    			$order_good=D("order_goods");
    			$order_goods=$order_good->select();
    			$oinfo=array();
    			foreach ($order_goods as $k =>$v) {
    				$oinfo[$v['order_no']]=$v['goods_name'];
    			}
    			
    			//获取会员账户名
    			$uinfo=D('user')->select();
    			$ninfo=array();
    			foreach ($uinfo as $k =>$v) {
    				$ninfo[$v['user_id']]=$v['username'];
    			}
    			
    			$this->assign('ninfo',$ninfo);
    			$this->assign('oinfo',$oinfo);
	    		$this->display();
    		}else {
    			$this->error('请输入查找条件。',U('showlist'),5);
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
}
?>