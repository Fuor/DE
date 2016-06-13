<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct() {
		parent::__construct();
		//购物车信息
		$Cart=new CartController();
		$totalPrice=$Cart->getPrice();
		$num=$Cart->getNum();
		$this->assign('totalPrice',$totalPrice);
		$this->assign('num',$num);
	}
	
    public function index(){
    	//分类目录
    	$cate = M('Category');
	    $cateRow = $cate->order(array('pid'=>'asc'))->select();//查询数据时对parent父级排序
	    $treeObj = new \Model\CategoryModel();
	    $row = $treeObj->getCat($cateRow,$pid = 0, $col_id = 'id', $col_pid = 'pid', $col_cid = 'haschild');
        // var_dump($cate );
        // exit();
		//商品
 		$good=M("Goods");
 		foreach ($row as $k=>$v) {
 			foreach ($v['childs'] as $kk=>$vv) {
 				$goods[]=$good->where("status=1 and goods_number>0 and goods_category_id='{$vv['id']}'")->limit(8)->order('rand()')->select();
 			}
 		//var_dump($goods);
 		//exit();
 		}
 		//传送参数
	    $this->assign('row', $row);
    	$this->assign('goods',$goods);
    	//渲染模板
		$this->display('Index/header');
		$this->display();
		$this->display('Index/footer');
    }
    
    public function header(){
    	$username=$_SESSION['username'];
    	$this->assign('username',$username);
        $this->display();
    }
    public function footer(){
        $this->display();
    }
    
    //惠生活
    function life() {
    	$this->display('Index/header');
		$this->display();
		$this->display('Index/footer');
    }
    
    //促销
    function sale() {
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