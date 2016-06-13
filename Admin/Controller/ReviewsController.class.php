<?php
namespace Admin\Controller;
use Component\AdminController;
class ReviewsController extends AdminController{
	//商品评论列表
    public function showlist(){
    	if (!empty($_SESSION['mg_username'])) {
	    	$review=M("Reviews");
	    	//分页
	    	$total=$review->count();
	    	$per=10;
	    	$page = new \Component\page($total,$per);
		    $sql="select * from sw_reviews where id>=0 order by add_time desc ".$page->limit;
	// 	    var_dump($sql);
	// 	    exit();
	    	$reviews=$review->query($sql);
	    	$pagelist= $page-> fpage();
	    	
	        //查询评价的商品
			$good=M('Goods');
			foreach ($reviews as $k=>$v) {
				$goods[]=$good->where("goods_id='{$v['goods_id']}'")->find();
			}
			//根据商品ID找商品名称
			foreach ($goods as $k=>$v) {
				$goods[$v['goods_id']]=$v['goods_name'];
			}
	//     	var_dump($reviews);
	//     	exit();
			$this->assign("reviews",$reviews);
			$this->assign("goods",$goods);
			$this->assign("pagelist",$pagelist);
			$this->display();
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //删除评价
    function del($id) {
	    if (!empty($_SESSION['mg_username'])) {
    		$info=M("Reviews");
    		$z=$info->where("id='{$id}'")->delete();
    		if ($z) {
    			$this->success('删除成功。',U('showlist'));
    		}else {
    			$this->error('删除失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //评价查找
    function search() {
    	if (!empty($_SESSION['mg_username'])) {
    		if (!empty($_POST)) {
    			$key=$_POST['key'];
    			//获取评价信息
    			$reviws=D('Reviews');
    			$where['_string']="(id ='{$key}') or (username = '{$key}') or (order_no = '{$key}') or (review like '%{$key}%')";
    			$info=$reviws->where($where)->select();

    			//查询评价的商品
    			$good=M('Goods');
    			foreach ($info as $k=>$v) {
    				$goods[]=$good->where("goods_id='{$v['goods_id']}'")->find();
    			}
    			//根据商品ID找商品名称
    			foreach ($goods as $k=>$v) {
    				$goods[$v['goods_id']]=$v['goods_name'];
    			}
    			
    			if ($info) {
    				$this->assign('info',$info);
    				$this->assign('goods',$goods);
    				$this->display();
    			}else {
    				$this->error('没有查到。');
    			}
    		}else {
    			$this->redirect('showlist');
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
}
?>