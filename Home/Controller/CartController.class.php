<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller {
    public function __construct() {
    	parent::__construct();
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
    }
    
    //购物车页面
    public function index() {
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		$username=session("username");
	        $data=D("Cart")->where("user_id='{$user_id}'")->find();
	        $cart=unserialize($data['info']);
            //var_dump($data);
            //exit();
    	}else {
	    	$cart=($_SESSION['cart']);
        	//var_dump($cart);
        	//exit();
    	}
    	$totalPrice=$this->getPrice();
    	$num=$this->getNum();
    	$this->assign('cart',$cart);
    	$this->assign('username',$username);
    	$this->assign('totalPrice',$totalPrice);
    	$this->assign('num',$num);
		$this->display('Index/header');
		$this->display();
		$this->display('Index/footer');
    }
 
    /*
            添加商品
    param int $goods_id 商品主键
          string $goods_name 商品名称
          float $goods_price 商品价格
          int $number 购物数量
    */
    public  function addItem($goods_id,$goods_name,$goods_price,$number) {
        $error = null;
    	//判断是否登录，登录则购物车数据存入数据库，否则存session中
    	if(session("user_id")){
    		$user_id=session("user_id");
    		$Cart=new \Model\CartModel();
    		$res=$Cart->addItem($user_id,$goods_id,$number,$goods_name,$goods_price);
    		if(!$res){
    		  $error = "添加失败";
    		}
    	}else {
	        //如果该商品已存在则直接加其数量
	        if (isset($_SESSION['cart'][$goods_id])) {
	            $this->incNum($goods_id,$number);
// 	            $this->success('已经添加过啦。',U('index'));
	        }
	        $item = array();
	        $item['goods_id'] = $goods_id;
	        $item['goods_name'] = $goods_name;
	        $item['goods_price'] = $goods_price;
	        $item['number'] += $number;
	        //获取商品缩略图
	        $goods=D("Goods");
	        $info=$goods->find($goods_id);
	        $item['goods_small_img'] = $info['goods_small_img'];
	        $_SESSION['cart'][$goods_id] = $item;
    	}
    	//$this->success('添加成功。',U('index',1));
    	$goodsNum = $this->getNum();
    	$totalPrice = $this->getPrice();
    	$datas['goodsNum'] = $goodsNum;
    	$datas['totalPrice'] = $totalPrice;
    	$datas['error'] = $error;
    	$this->ajaxReturn($datas);
    }
 
 
    /*
                 商品数量+1
    */
    public function incNum($goods_id,$number) {
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		$Cart=new \Model\CartModel();
    		$data=unserialize($Cart->getUserid($user_id));
    		foreach ($data as $k=>$v) {
    			if ($v["goods_id"]==$goods_id) {
    				$goods=D("Goods");
    				$info=$goods->find($goods_id);
    				$goods_number = $info['goods_number'];
    				if ($data[$k]["number"]<$goods_number) {
    					$data[$k]["number"]+=$number;
    				}else {
    					$this->error('库存不够，下次再多买点哦。',U('index'));
    				}
    			}
    		}
    		$data=serialize($data);
    		$ndata=array();
    		$ndata["user_id"]=$user_id;
    		$ndata["info"]=$data;
    		//入库
    		$Cart->add($ndata,array(),true);
    	}else {
	        if (isset($_SESSION['cart'][$goods_id])) {
	        	$goods=D("Goods");
	        	$info=$goods->find($goods_id);
	        	$goods_number = $info['goods_number'];
	        	if ($_SESSION['cart'][$goods_id]['number']<$goods_number) {
	        		$_SESSION['cart'][$goods_id]['number'] += $number;
	        	}else {
	        		$this->error('库存不够，下次再多买点哦。',U('index'));
	        	}
	        }
    	}
    	$goodsNum = $this->getNum();
    	$totalPrice = $this->getPrice();
    	$datas['goodsNum'] = $goodsNum;
    	$datas['totalPrice'] = $totalPrice;
    	$this->ajaxReturn($datas);
    }
    //异步方法
    public function incNums($goods_id) {
        $error = null;
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		$Cart=new \Model\CartModel();
    		$data=unserialize($Cart->getUserid($user_id));
    		foreach ($data as $k=>$v) {
    			if ($v["goods_id"]==$goods_id) {
    				$goods=D("Goods");
    				$info=$goods->find($goods_id);
    				$goods_number = $info['goods_number'];
    				if ($data[$k]["number"]<$goods_number) {
    					$data[$k]["number"]+=1;
    					$itemNum = $data[$k]["number"];
    				}else {
    					//$this->error('库存不够，下次再多买点哦。',U('index'));
    					$error='库存不够，下次再多买点哦。';
    					$data[$k]["number"]=$goods_number;
    					$itemNum = $goods_number;
    				}
    				$itemPrice = $data[$k]["goods_price"];
    			}
    		}
    		$data=serialize($data);
    		$ndata=array();
    		$ndata["user_id"]=$user_id;
    		$ndata["info"]=$data;
    		//入库
    		$Cart->add($ndata,array(),true);
    	}else {
	        if (isset($_SESSION['cart'][$goods_id])) {
	        	$goods=D("Goods");
	        	$info=$goods->find($goods_id);
	        	$goods_number = $info['goods_number'];
	        	if ($_SESSION['cart'][$goods_id]['number']<$goods_number) {
	        		$_SESSION['cart'][$goods_id]['number'] +=1;
	        		$itemNum = $_SESSION['cart'][$goods_id]['number'];
	        	}else {
	        		//$this->error('库存不够，下次再多买点哦。',U('index'));
	        		$error='库存不够，下次再多买点哦。';
	        		$_SESSION['cart'][$goods_id]['number']=$goods_number;
	        		$itemNum = $goods_number;
	        	}
	        	$itemPrice = $_SESSION['cart'][$goods_id]['goods_price'];
	        }
    	}
        $goodsNum = $this->getNum();
    	$totalPrice = $this->getPrice();
    	$datas['itemNum'] = $itemNum;
    	$datas['goodsNum'] = $goodsNum;
    	$datas['itemPrice'] = $itemPrice;
    	$datas['totalPrice'] = $totalPrice;
    	$datas['error'] = $error;
    	$this->ajaxReturn($datas);
    }
 
    /*
                商品数量-1
    */
    public function decNum($goods_id) {
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		$Cart=new \Model\CartModel();
    		$data=unserialize($Cart->getUserid($user_id));
    		foreach ($data as $k=>$v) {
    			if ($v["goods_id"]==$goods_id) {
    				$goods=D("Goods");
    				$info=$goods->find($goods_id);
    				$goods_number = $info['goods_number'];
    				if ($data[$k]["number"]>1) {
    					$data[$k]["number"]-=1;
    				}
    			}
    		}
    		$data=serialize($data);
    		$ndata=array();
    		$ndata["user_id"]=$user_id;
    		$ndata["info"]=$data;
    		//入库
    		$Cart->add($ndata,array(),true);
    	}else {
	        if (isset($_SESSION['cart'][$goods_id])) {
	        	if ($_SESSION['cart'][$goods_id]['number'] >1) {
	        		$_SESSION['cart'][$goods_id]['number'] -= 1;
	        	}
	        }
    	}
         $this->redirect('index');
    }
    //异步方法
    public function decNums($goods_id) {
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		$Cart=new \Model\CartModel();
    		$data=unserialize($Cart->getUserid($user_id));
    		foreach ($data as $k=>$v) {
    			if ($v["goods_id"]==$goods_id) {
    				$goods=D("Goods");
    				$info=$goods->find($goods_id);
    				$goods_number = $info['goods_number'];
    				if ($data[$k]["number"]>1) {
    					$data[$k]["number"]-=1;
    					$itemNum = $data[$k]["number"];
    				}
    				$itemPrice = $data[$k]["goods_price"];
    			}
    		}
    		$data=serialize($data);
    		$ndata=array();
    		$ndata["user_id"]=$user_id;
    		$ndata["info"]=$data;
    		//入库
    		$Cart->add($ndata,array(),true);
    	}else {
	        if (isset($_SESSION['cart'][$goods_id])) {
	        	if ($_SESSION['cart'][$goods_id]['number'] >1) {
	        		$_SESSION['cart'][$goods_id]['number'] -= 1;
	        	}
	        	$itemNum = $_SESSION['cart'][$goods_id]['number'];
	        	$itemPrice = $_SESSION['cart'][$goods_id]['goods_price'];
	        }
    	}
    	$goodsNum = $this->getNum();
    	$totalPrice = $this->getPrice();
    	$datas['itemNum'] = $itemNum;
    	$datas['goodsNum'] = $goodsNum;
    	$datas['itemPrice'] = $itemPrice;
    	$datas['totalPrice'] = $totalPrice;
    	$this->ajaxReturn($datas);
    	
    }
    
    /*
                    输入数量改变购物车数方法
     */
    public function changeNums($goods_id,$number) {
        $error = null;
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		$Cart=new \Model\CartModel();
    		$data=unserialize($Cart->getUserid($user_id));
    		foreach ($data as $k=>$v) {
    			if ($v["goods_id"]==$goods_id) {
    				$goods=D("Goods");
    				$info=$goods->find($goods_id);
    				$goods_number = $info['goods_number'];
    				if ($number<$goods_number) {
    					$data[$k]["number"]=$number;
    					$itemNum = $data[$k]["number"];
    				}else {
    					//$this->error('库存不够，下次再多买点哦。',U('index'));
    					$error='库存不够，下次再多买点哦。';
    					$data[$k]["number"]=$goods_number;
    				    $itemNum = $goods_number;
    				}
    				$itemPrice = $data[$k]["goods_price"];
    			}
    		}
    		$data=serialize($data);
    		$ndata=array();
    		$ndata["user_id"]=$user_id;
    		$ndata["info"]=$data;
    		//入库
    		$Cart->add($ndata,array(),true);
    	}else {
	        if (isset($_SESSION['cart'][$goods_id])) {
	        	$goods=D("Goods");
	        	$info=$goods->find($goods_id);
	        	$goods_number = $info['goods_number'];
	        	if ($number<$goods_number) {
	        		$_SESSION['cart'][$goods_id]['number'] = $number;
	        		$itemNum = $number;
	        	}else {
	        		//$this->error('库存不够，下次再多买点哦。',U('index'));
	        		$error='库存不够，下次再多买点哦。';
	        		$_SESSION['cart'][$goods_id]['number']=$goods_number;
	        		$itemNum = $goods_number;
	        	}
	        	$itemPrice = $_SESSION['cart'][$goods_id]['goods_price'];
	        }
    	}
        $goodsNum = $this->getNum();
    	$totalPrice = $this->getPrice();
    	$datas['itemNum'] = $itemNum;
    	$datas['goodsNum'] = $goodsNum;
    	$datas['itemPrice'] = $itemPrice;
    	$datas['totalPrice'] = $totalPrice;
    	$datas['error'] = $error;
    	$this->ajaxReturn($datas);
    }
 
    /*
                删除商品
    */
    public function delItem($goods_id) {
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		$Cart=new \Model\CartModel();
    		$data=unserialize($Cart->getUserid($user_id));
    		foreach ($data as $k=>$v) {
    			if ($v["goods_id"]==$goods_id) {
    					unset($data[$k]);
    			}
    		}
    		$data=serialize($data);
    		$ndata=array();
    		$ndata["user_id"]=$user_id;
    		$ndata["info"]=$data;
    		//入库
    		$Cart->add($ndata,array(),true);
    	}else {
	        unset($_SESSION['cart'][$goods_id]);
    	}
    	$this->success('删除成功。',U('index'),1);
    }
     
 
    /*
                查询购物车中商品的种类
    */
    public function getCnt() {
    	if ($this->getNum() == 0) {
    		//个数为0，种数也为0
    		return 0;
    	}
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		$info=D("Cart");
    		$data=$info->where("user_id='{$user_id}'")->find();
    		$data=unserialize($data['info']);
    		return count($data);
    	}else {
        	return count($_SESSION['cart']);
    	}
    }
     
    /*
                查询购物车中商品的个数
    */
    public function getNum(){
        $sum = 0; 
        if (session("user_id")) {
        	$user_id=session("user_id");
    		$info=D("Cart");
	        $data=$info->where("user_id='{$user_id}'")->find();
	        $data=unserialize($data['info']);
        }else {
            $data = $_SESSION['cart'];
        }
        foreach ($data as $item) {
            $sum += $item['number'];
        }
//         var_dump($sum);
//         exit();
       return $sum;
    }
    
    //异步获取
    public function getNums(){
        $sum = 0; 
        if (session("user_id")) {
        	$user_id=session("user_id");
    		$info=D("Cart");
	        $data=$info->where("user_id='{$user_id}'")->find();
	        $data=unserialize($data['info']);
        }else {
            $data = $_SESSION['cart'];
        }
        foreach ($data as $item) {
            $sum += $item['number'];
        }
       $this->ajaxReturn($sum);
    }
    
    /*
                购物车中商品的总金额
    */
    public function getPrice() {
        //数量为0，价钱为0
        if ($this->getCnt() == 0) {
            return 0;
        }
        $goods_price = 0.00;
        if (session("user_id")) {
        	$user_id=session("user_id");
    		$info=D("Cart");
	        $data=$info->where("user_id='{$user_id}'")->find();
	        $data=unserialize($data['info']);
        }else {
        	$data = $_SESSION['cart'];
        }
        foreach ($data as $item) {
            $goods_price += $item['number'] * $item['goods_price'];
        }
        return $p=sprintf("%01.2f", $goods_price);
    }
    //异步方式
    public function getPrices() {
        //数量为0，价钱为0
        if ($this->getCnt() == 0) {
            return 0;
        }
        $goods_price = 0.00;
        if (session("user_id")) {
        	$user_id=session("user_id");
    		$info=D("Cart");
	        $data=$info->where("user_id='{$user_id}'")->find();
	        $data=unserialize($data['info']);
        }else {
        	$data = $_SESSION['cart'];
        }
        foreach ($data as $item) {
            $goods_price += $item['number'] * $item['goods_price'];
        }
        $this->ajaxReturn($p=sprintf("%01.2f", $goods_price));
    }
 
    /*
            清空购物车
    */
    public function clear() {
    	if (session("user_id")) {
    		$user_id=session("user_id");
    		D("Cart")->where("user_id='{$user_id}'")->delete();
            //$data=unserialize($data['info']);
    	}else {
        	$_SESSION['cart'] = array();
    	}
        $this->success('清空成功，再逛逛吧。',U('Index/index'),1);
    }
    
    function _empty() {
    	//服务器繁忙提示
    	$empty=new EmptyController();
    	$empty->_empty();
    }
}