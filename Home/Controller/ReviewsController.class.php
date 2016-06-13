<?php
namespace Home\Controller;
use Think\Controller;
class ReviewsController extends Controller {
	public function __construct() {
		parent::__construct();
		//购物车信息
		$Cart=new CartController();
		$totalPrice=$Cart->getPrice();
		$num=$Cart->getCnt();
		$this->assign('totalPrice',$totalPrice);
		$this->assign('num',$num);
	}
	
	//商品评论列表
    public function reviews($goods_id){
    	$review=M("Reviews");
    	$reviews=$review->where("goods_id='{$goods_id}'")->select();
    	
    	return $reviews;
//     	var_dump($reviews);
//     	exit();
    }
    
	//个人评论列表
    public function getReviews($username){
    	$review=M("Reviews");
    	$reviews=$review->where("username='{$username}'")->select();
    	
    	return $reviews;
//     	var_dump($reviews);
//     	exit();
    }
    
	//评论详情
    public function detail(){
    	if (empty($_SESSION['username'])) {
    		$this->redirect('User/login');
    	}
    	$order_no=I('order_no');
    	$review=M("Reviews");
    	$reviews=$review->where("order_no='{$order_no}'")->select();
    	
    	//查询评价的商品
		$good=M('Goods');
		foreach ($reviews as $k=>$v) {
			$goods[]=$good->where("goods_id='{$v['goods_id']}'")->find();
		}
		//根据商品ID找商品名称
// 		$g=array();
// 		foreach ($goods as $k=>$v) {
// 			$goods[$v['goods_id']]=$v['goods_name'];
// 		}
		
		$this->assign('reviews',$reviews);
		$this->assign('goods',$goods);
		$this->display('Index/header');
		$this->display();
		$this->display('Index/footer');
		
    }
    
    //添加评论
    public function add() {
    	if (empty($_SESSION['username'])) {
    		$this->redirect('User/login');
    	}
    	$order=D('Order');
    	$order_no=I('order_no');
    	if (!empty($_POST)) {
//     		var_dump($_POST);
//     		exit();
    		$reviews=M("Reviews");
			$z=$reviews->create();
			$res=false;
			foreach($z['review'] as $k => $v){
				$data = array();
				$data['review'] = $v;
				$data['goods_id'] = $z['goods_id'][$k];
				$data['username'] = $_SESSION['username'];
				$data['add_time'] = time();
// 				$data['user_id'] = $z['user_id'][$k];
// 				$data['add_time'] = $z['add_time'][$k];
				$data['rate'] = $z['rate'][$k];
				$data['order_no'] =$order_no;
// 				$data['order_no'] =$z['order_no'][$k];
				$reviews->add($data);
				$res=true;
			}
// 			var_dump($res);
// 			exit();
	    	if ($res) {
	    		//订单状态改为已评价
// 	    		var_dump($order_no);
// 	    		exit();
	    		$order->where("order_no='{$order_no}'")->status=4;
	    		$z=$order->where("order_no='{$order_no}'")->save();
	    		if ($res) {
	    			$this->success("评价成功。",U('User/myorder'));
	    		}else {
	    			$this->error("评价失败。",U('User/myorder'));
	    		}
	    	}else {
	    		$this->error("评价失败。",U('User/myorder'));
	    	}
    	}else {
    		//判断是否已评价
//     		$order=D('Order1');
//     		$order_no=I('order_no');
    		//var_dump($order_no);
    		//exit();
    		$o=$order->where("order_no='{$order_no}'")->find();
    		if ($o['status']==4) {
    			$this->error("订单已评价。",U('User/myorder'));;
    		}
    		
    		//查询订单商品
	    	$order_goods=D('Order_goods')->where("order_no='{$order_no}'")->select();
	    	$goods=array();
	    	foreach ($order_goods as $k=>$v) {
	    		$goods[]=D("Goods")->where("goods_id='{$v['goods_id']}'")->find();
	    	}
// 	    	var_dump($goods);
// 	    	exit();
	    	$this->assign("order_no",$order_no);
	    	$this->assign("goods",$goods);
			$this->display('Index/header');
			$this->display();
			$this->display('Index/footer');
    	}
    }
}
?>