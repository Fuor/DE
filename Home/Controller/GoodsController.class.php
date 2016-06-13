<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
	public function __construct() {
		parent::__construct();
		//购物车信息
		$Cart=new CartController();
		$totalPrice=$Cart->getPrice();
		$num=$Cart->getNum();
		$this->assign('totalPrice',$totalPrice);
		$this->assign('num',$num);
	}
	
//     public function showlist(){
//     	$goods=M("Goods1");//或$goods=D();表示实际操作的方法
//     	$total=$goods->where("status=1 and goods_number>0 ")->count();
//     	$per=16;
//     	$page = new \Component\page($total,$per);
//     	$sql="select * from sw_goods1 where status=1 and goods_number>0 ".$page->limit;
//     	$info=$goods->query($sql);
//     	$pagelist= $page-> fpage();
    	
//     	$this->assign('info',$info);
// //     	var_dump($info);
// //     	exit();
//     	$this->assign('pagelist',$pagelist);
//     	$this->display('Index/header');
//     	$this->display();
//     	$this->display('Index/footer');
//     }
    
    function detail($goods_id){
    	//查询商品
    	$goods=M("Goods");
	    $info=$goods->where("goods_id='{$goods_id}' and status=1 and goods_number>0 ")->find();
	    $catid=$info['goods_category_id'];
	    
// 	    var_dump($catid);
// 	    exit();
	    
	    //查询所有评价
	    $revews=new ReviewsController();
	    $review=$revews->reviews($goods_id);
	    
	    //评价分页
	    $re=M('Reviews');
	    $total=count($review);
	    $per=15;
	    $page = new \Component\page($total,$per);
	    $sql="select * from sw_reviews where goods_id='{$goods_id}'".$page->limit;
	    $allRevew=$re->query($sql);
	    $pagelist= $page-> fpage();
// 	    var_dump($pagelist);
// 	    exit();
	    
	    //分类
	    $cate = M('Category');
	    $cateRow = $cate->order(array('pid'=>'asc'))->select();//查询数据时对parent父级排序
	    $treeObj = new \Model\CategoryModel();
	    $row = $treeObj->getCat($cateRow,$pid = 0, $col_id = 'id', $col_pid = 'pid', $col_cid = 'haschild');

	    //当前商品子类名
	    $scat=$cate->where("id='{$catid}'")->find();
	    //父类
	    $pid=$scat["pid"];
	    $pcat=$cate->where("id='{$pid}'")->find();
	    
	    //系统推荐
	    $good=M("Goods");
	    $goods=$good->where("status=1 and goods_number>0 ")->limit(5)->order('rand()')->select();
	    
	    //销量排行
	    $volume=$good->where("status=1 and goods_number>0 ")->order('volume desc')->limit(10)->select();
// 	    var_dump($volume);
// 	    exit();
		if (!$info) {
			$this->error('该商品已下架或删除，请浏览其他商品。',U('Index/index'));
		}else {
			$this->assign("info",$info);
			$this->assign("allRevew",$allRevew);
			$this->assign("pagelist",$pagelist);
			$this->assign("total",$total);
			$this->assign("row",$row);
			$this->assign("pcat",$pcat);
			$this->assign("scat",$scat);
			$this->assign("goods",$goods);
			$this->assign("volume",$volume);
			//购物车信息
			$Cart=new CartController();
			$num=$Cart->getNum();
			$this->assign('num',$num);
    		$this->display('Index/header');
    		$this->display();
    		$this->display('Index/footer');
		}
    }
    
    //分类商品
    function catlist() {
    	//分类
    	$cate = M('Category');
    	$cateRow = $cate->order(array('pid'=>'asc'))->select();//查询数据时对parent父级排序
    	$treeObj = new \Model\CategoryModel();
    	$row = $treeObj->getCat($cateRow,$pid = 0, $col_id = 'id', $col_pid = 'pid', $col_cid = 'haschild');
    	
    	if(!empty(I('id'))){
    		$catid=I('id');
    		//所有商品
    		$goods=M("Goods");
    		$total=$goods->where("goods_category_id='{$catid}' and status=1 and goods_number>0 ")->count();
			$per=20;
    		$page = new \Component\page($total,$per);
    		$sql="select * from sw_goods where goods_category_id=".$catid." and status=1 and goods_number>0 ".$page->limit;
    		$info=$goods->query($sql);
    		$pagelist= $page-> fpage();
    		
    		//热门商品
    		$hot=$goods->where("hot=1 and status=1 and goods_number>0 ")->limit(6)->order('rand()')->select();
    		
    		//当前商品子类名
    		$scat=$cate->where("id='{$catid}'")->find();
    		//父类
    		$pid=$scat["pid"];
    		$pcat=$cate->where("id='{$pid}'")->find();
			
    	}else{
		    //所有商品
		    $goods=M("Goods");//或$goods=D();表示实际操作的方法
		    $total=$goods->where("status=1 and goods_number>0 ")->count();
		    $per=20;
		    $page = new \Component\page($total,$per);
		    $sql="select * from sw_goods where status=1 and goods_number>0 order by volume desc ".$page->limit;
		    $info=$goods->query($sql);
		    $pagelist= $page-> fpage();
		    //热门商品
		    $hot=$goods->where("hot=1 and status=1 and goods_number>0")->limit(6)->order('rand()')->select();
    	}
    	
    	//子分类无商品时推荐商品
    	$good=M("Goods");
    	$goods=$good->where("status=1 and goods_number>0 ")->limit(20)->order('rand()')->select();
    	
    	$this->assign('info',$info);
    	$this->assign('pagelist',$pagelist);
    	$this->assign("row",$row);
    	$this->assign("scat",$scat);
    	$this->assign("pcat",$pcat);
    	$this->assign("hot",$hot);
    	$this->assign("goods",$goods);
    	$this->display('Index/header');
    	$this->display();
    	$this->display('Index/footer');
    }
    
    //商品查找
    function search() {
    	//分类
    	$cate = M('Category');
    	$cateRow = $cate->order(array('pid'=>'asc'))->select();//查询数据时对parent父级排序
    	$treeObj = new \Model\CategoryModel();
    	$row = $treeObj->getCat($cateRow,$pid = 0, $col_id = 'id', $col_pid = 'pid', $col_cid = 'haschild');
    	
    	if(!empty(I('keywords'))){
    		$key=I('keywords');
    		//所有商品
    		$goods=M("Goods");
    		$total=$goods->where("goods_name like '%{$key}%' and status=1 and goods_number>0 ")->count();
			$per=20;
    		$page = new \Component\page($total,$per);
    		$sql="select * from sw_goods where goods_name like '%{$key}%'"." and status=1 and goods_number>0 ".$page->limit;
    		$info=$goods->query($sql);
    		$pagelist= $page-> fpage();
    		
    		//热门商品
    		$hot=$goods->where("hot=1")->limit(6)->order('rand()')->select();
    		
    	}else{
		    //所有商品
		    $goods=M("Goods");//或$goods=D();表示实际操作的方法
		    //热门商品
		    $hot=$goods->where("hot=1")->limit(6)->order('rand()')->select();
		    $info=null;
    	}
    	
    	//无商品时推荐商品
    	$good=M("Goods");
    	$goods=$good->where("status=1 and goods_number>0 ")->limit(20)->order('rand()')->select();
    	
    	$this->assign('info',$info);
    	$this->assign('pagelist',$pagelist);
    	$this->assign("row",$row);
    	$this->assign("hot",$hot);
    	$this->assign("goods",$goods);
    	$this->assign("key",$key);
    	$this->display('Index/header');
    	$this->display();
    	$this->display('Index/footer');
    }
    
    function _empty() {
    	//服务器繁忙提示
    	$empty=new EmptyController();
    	$empty->_empty();
    }
    
}
?>