<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
	public function __construct() {
		parent::__construct();
		//购物车信息
		$Cart=new CartController();
		$totalPrice=$Cart->getPrice();
		$num=$Cart->getCnt();
		$this->assign('totalPrice',$totalPrice);
		$this->assign('num',$num);
	}
	
    //订单确认页面
    public function index() {
    	if (!empty($_SESSION['username'])) {
    		$username=$_SESSION['username'];
    		$user=M("User");
    		$uinfo=$user->where("username='{$username}'")->find();
    		if (empty($uinfo['name']) || empty($uinfo['phone'] || $uinfo['telephone']) || empty($uinfo['user_email'])|| empty($uinfo['adress']) || empty($uinfo['postcode'])) {
    			$this->error('请先设置收货信息。',U('User/adress'));
    		}
    		
	    	if (!empty($_POST['goods_id'])) {
	    		$goods_id=$_POST['goods_id'];
	
				//获取用户购物车信息
	    		$user_id=session("user_id");
	    		$goods_info=unserialize(D('cart')->where("user_id='{$user_id}'")->getField("info"));
	    		foreach ($goods_info as $key=> $v) { //首先循环商品列表
	    			if(in_array($v['goods_id'],$goods_id)){   //is_array是判断某变量是否属于该数组
	    				$goods[] =  $v;
	    				$allprice+=$v['goods_price']*$v['number'];
	    			}
	    		}
	//     		var_dump($allprice);
	//     		exit();
	    		if (empty($goods)) {
	    			$this->error('请选择要购买的商品',U('Cart/index'));
	    		}
				//设置防止重复提交编号
				$code = mt_rand(0,1000000);
				
				//用户收货地址信息
				$info=D("User");
				$infos=$info->where("username='{$username}'")->find();
				
				$this->assign('infos',$infos);
				$this->assign('goods',$goods);
				$this->assign('code',$code);
				$this->assign('allprice',$allprice);
				$this->assign('username',$username);
				
	    		$this->display('Index/header');
	    		$this->display();
	    		$this->display('Index/footer');
	    	}else {
	    		$this->error('请选择要购买的商品','javascript:history.back(-1)');
	    	}
    	}else {
    		$this->redirect('User/login');
    	}
    }
    
    //确认订单
    public function checkOrder() {
    	if(isset($_POST['code'])) {
    		if($_POST['code'] == $_SESSION['code']){
    			$this->error('不能重复提交。','javascript:history.back(-1)');// 重复提交表单了
    		}else{
    			$_SESSION['code'] =$_POST['code']; //存储code
    		}
    	}
    	
    	//订单号生成方法
    	$order_no = date('Ymd').substr(time(),-5).substr(microtime(),2,5);
    	
    	//接收运费
    	$shipping=$_POST['shipping'];
    	
//     	var_dump($shipping);
//     	exit();

    	//查询用户购物车中的商品信息
    	if (!empty($_POST['goods_id'])) {
    		$goods_id=$_POST['goods_id'];
//     		var_dump($goods_id);
//     		exit();

			//获取用户购物车信息
    		$user_id=session("user_id");
    		$goods_info=unserialize(D('cart')->where("user_id='{$user_id}'")->getField("info"));
    		
    		foreach ($goods_info as $key=> $v) { //首先循环购物车列表
    			if(in_array($v['goods_id'],$goods_id)){   //is_array获取对应商品信息
    				$goods[] =  $v;
    				$allprice+=$v['goods_price']*$v['number'];
    			}
    		}

		//商品总价加上运费
    	$totalprice=$allprice+$shipping;
    	
    	//从用户表查询用户信息
    	$user=D('user')->where("user_id='{$user_id}'")->find();
    	$order_data=array();
    	$order_data['user_id']=$user_id;
    	$order_data['price']=$totalprice;
    	$order_data['pay']="";
    	$order_data['name']=$user['name'];
    	$order_data['adress']=$user['adress'];
    	$order_data['phone']=$user['phone'];
    	$order_data['telephone']=$user['telephone'];
    	$order_data['email']=$user['user_email'];
    	$order_data['postcode']=$user['postcode'];
    	$order_data['pay_time']=time();
    	$order_data['create_time']=time();
    	$order_data['status']=0;
    	$order_data['order_no']=$order_no;
//     	var_dump($order_data);
//     	exit();
		//往订单表插入订单数据
    	$oid=D('order')->add($order_data);
    	
    	if ($oid) {
    		//往订单商品表插入数据
	    	foreach ($goods as $kk => $vv) {
		    	$order_goods=array();
		    	$order_goods['goods_id']=$vv['goods_id'];
		    	$order_goods['goods_name']=$vv['goods_name'];
		    	$order_goods['goods_price']=$vv['goods_price'];
		    	$order_goods['number']=$vv['number'];
		    	$order_goods['order_no']=$order_no;
// 		    	var_dump($order_goods);
//     			exit();
		    	$ok=D('order_goods')->add($order_goods);
		    	
		        //下单减库存
		    	$goods=D("goods");
		    	$good=$goods->where("goods_id='{$vv['goods_id']}'")->find();
		    	$good_number["goods_number"]=$good["goods_number"]-$vv['number'];
		    	$z=$goods->where("goods_id='{$vv['goods_id']}'")->save($good_number);
// 		    	var_dump($z);
// 		    	exit();
	    	}
	    	
    	}else {
    		$this->error('订单提交失败',U('cart/showlist'));
    	}

    	//删除购物车中已经购买的商品
    	if ($ok) {
    		foreach ($goods_info as $k=> $v) {
	    		if(in_array($v['goods_id'],$goods_id)){
	    			unset($goods_info[$k]);
	    		}
    		}
	    	$data=serialize($goods_info);
	    	$ndata=array();
	    	$ndata["user_id"]=$user_id;
	    	$ndata["info"]=$data;
	//     	var_dump($ndata);
	//     	exit();
	//     	//入库
	    	$del=D('cart')->add($ndata,array(),true);
    	}
    	
    	//********易宝支付***********//
//     		include("Component/yeepayMPay.class.php");
//     		include("config.php");
    		require_once ("Home/Lib/ORG/yeepay/yeepayMPay.php");
    		$merchantaccount=C('merchantaccount');
    		$merchantPublicKey=C('merchantPublicKey');
    		$merchantPrivateKey=C('merchantPrivateKey');
    		$yeepayPublicKey=C('yeepayPublicKey');
    		
    		$order=M("Order");
    		$detail=$order->where("order_no='{$order_no}'")->find();
    		
    		$yeepay = new \yeepayMPay($merchantaccount,$merchantPublicKey,$merchantPrivateKey,$yeepayPublicKey);
    		$order_id =$order_no;//网页支付的订单在订单有效期内可以进行多次支付请求，但是需要注意的是每次请求的业务参数都要一致，交易时间也要保持一致。否则会报错“订单与已存在的订单信息不符”
    		$transtime = (int)$detail['pay_time'];//交易时间，是每次支付请求的时间，注意此参数在进行多次支付的时候要保持一致。
    		$product_catalog ='1';//商品类编码是我们业管根据商户业务本身的特性进行配置的业务参数。
    		$identity_id = $user_id;//用户身份标识，是生成绑卡关系的因素之一，在正式环境此值不能固定为一个，要一个用户有唯一对应一个用户标识，以防出现盗刷的风险且一个支付身份标识只能绑定5张银行卡
    		$identity_type = 0;//支付身份标识类型码
    		$user_ip = '172.17.253.112'; //此参数不是固定的商户服务器ＩＰ，而是用户每次支付时使用的网络终端IP，否则的话会有不友好提示：“检测到您的IP地址发生变化，请注意支付安全”。
    		$user_ua = 'NokiaN70/3.0544.5.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1';//用户ua
    		$callbackurl ='http://www.de.com:8080/index.php/Home/Order/callback';//商户后台系统回调地址，前后台的回调结果一样
    		$fcallbackurl ='http://www.de.com:8080/index.php/Home/Order/callback';//商户前台系统回调地址，前后台的回调结果一样
    		$product_name = '德商城-'.$order_goods['goods_name'];//出于风控考虑，请按下面的格式传递值：应用-商品名称，如“诛仙-3 阶成品天琊”
    		$product_desc = '商品描述';//商品描述
    		$terminaltype = 3;
    		$terminalid = '05-16-DC-59-C2-34';//其他支付身份信息
    		$amount =$totalprice;//订单金额单位为分，支付时最低金额为2分，因为测试和生产环境的商户都有手续费（如2%），易宝支付收取手续费如果不满1分钱将按照1分钱收取。
    		
    		$url = $yeepay->pcWebPay($order_id,$transtime,$amount,$product_catalog,$identity_id,$identity_type,$user_ip,$user_ua, $terminaltype,$terminalid,$paytypes='1|2',$orderexp_date=60,$callbackurl,$fcallbackurl,156,$product_name,$product_desc);
    		
    		$arr = explode("&",$url);
    		$encrypt = explode("=",$arr[1]);
    		$data = explode("=",$arr[2]);
    		
//     		echo($url);
    		
    	
    	//**********END易宝支付*************//
    	
    	$this->assign($order_goods);
    	$this->assign('totalprice',$totalprice);
    	$this->assign('url',$url);
    	$this->display('Index/header');
    	$this->display();
    	$this->display('Index/footer');
    }else {
    		$this->error('请先选择要购买的商品',U('Goods/showlist'));
    	}
    }
    
    
    function create_str( $length = 8 ) {
    	// 密码字符集，可任意添加你需要的字符
    	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    	$str = '';
    	for ( $i = 0; $i < $length; $i++ )
    	{
    		// 这里提供两种字符获取方式
    		// 第一种是使用 substr 截取$chars中的任意一位字符；
    		// 第二种是取字符数组 $chars 的任意元素
    		// $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
    		$str .= $chars[ mt_rand(0, strlen($chars) - 1) ];
    	}
    	return $str;
    }
    
    //订单详情
    function detail($order_no) {
    	if (!empty($_SESSION['username'])) {
    		$username=$_SESSION['username'];
    		$order=M("Order");
    		$detail=$order->where("order_no='{$order_no}'")->find();
    		$status=$detail['status'];
//     		var_dump($status);
//     		exit();

			//未支付订单支付
			if($status==0){
	    		require_once ("Home/Lib/ORG/yeepay/yeepayMPay.php");
	    		$merchantaccount=C('merchantaccount');
	    		$merchantPublicKey=C('merchantPublicKey');
	    		$merchantPrivateKey=C('merchantPrivateKey');
	    		$yeepayPublicKey=C('yeepayPublicKey');
	    		
	    		$yeepay = new \yeepayMPay($merchantaccount,$merchantPublicKey,$merchantPrivateKey,$yeepayPublicKey);
	    		$order_id =$order_no;//网页支付的订单在订单有效期内可以进行多次支付请求，但是需要注意的是每次请求的业务参数都要一致，交易时间也要保持一致。否则会报错“订单与已存在的订单信息不符”
	    		$transtime = (int)$detail['pay_time'];//交易时间，是每次支付请求的时间，注意此参数在进行多次支付的时候要保持一致。
	    		$product_catalog ='1';//商品类编码是我们业管根据商户业务本身的特性进行配置的业务参数。
	    		$identity_id = $detail['user_id'];//用户身份标识，是生成绑卡关系的因素之一，在正式环境此值不能固定为一个，要一个用户有唯一对应一个用户标识，以防出现盗刷的风险且一个支付身份标识只能绑定5张银行卡
	    		$identity_type = 0;//支付身份标识类型码
	    		$user_ip = '172.17.253.112'; //此参数不是固定的商户服务器ＩＰ，而是用户每次支付时使用的网络终端IP，否则的话会有不友好提示：“检测到您的IP地址发生变化，请注意支付安全”。
	    		$user_ua = 'NokiaN70/3.0544.5.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1';//用户ua
	    		$callbackurl ='http://www.de.com:8080/index.php/Home/Order/callback';//商户后台系统回调地址，前后台的回调结果一样
	    		$fcallbackurl ='http://www.de.com:8080/index.php/Home/Order/callback';//商户前台系统回调地址，前后台的回调结果一样
	    		$product_name = '德商城-'.$order_good['goods_name'];//出于风控考虑，请按下面的格式传递值：应用-商品名称，如“诛仙-3 阶成品天琊”
	    		$product_desc = '商品描述';//商品描述
	    		$terminaltype = 3;
	    		$terminalid = '05-16-DC-59-C2-34';//其他支付身份信息
	    		$amount =(int)$detail['price'];//订单金额单位为分，支付时最低金额为2分，因为测试和生产环境的商户都有手续费（如2%），易宝支付收取手续费如果不满1分钱将按照1分钱收取。
// 	    		var_dump($transtime);
//     			exit();
	    		$url = $yeepay->pcWebPay($order_id,$transtime,$amount,$product_catalog,$identity_id,$identity_type,$user_ip,$user_ua, $terminaltype,$terminalid,$paytypes='1|2',$orderexp_date=60,$callbackurl,$fcallbackurl,156,$product_name,$product_desc);
	    		
	    		$arr = explode("&",$url);
	    		$encrypt = explode("=",$arr[1]);
	    		$data = explode("=",$arr[2]);
			}
			
			//订单商品
			$order_good=D("order_goods");
			$order_goods=$order_good->where("order_no='{$order_no}'")->select();
			
    		$this->assign('detail',$detail);
    		$this->assign('order_goods',$order_goods);
    		$this->assign('url',$url);
    		$this->assign('username',$username);
    		$this->display('Index/header');
    		$this->display();
    		$this->display('Index/footer');
    	}else {
  			$this->redirect('User/login');
  		}
    }
    
    //确认收货
    function receipt ($order_no) {
    	if (!empty($_SESSION['username'])) {
    		$order=M("Order");
    		$order->status=3;
    		$z=$order->where("order_no='{$order_no}'")->save();
    		if ($z) {
    			$this->success('确认收货成功。',U('User/myorder'));
    		}else {
    			$this->error('确认失败，请重试。',U('User/myorder'));;
    		}
    	}
    }
    
    //删除订单
    function deleteOrder($order_no) {
    	if (!empty($_SESSION['username'])) {
    		$order=M("Order");
    		$z=$order->where("order_no='{$order_no}'")->delete();
    		$order_goods=M("Order_goods");
    		$r=$order_goods->where("order_no='{$order_no}'")->delete();
    		if ($z && $r) {
    			$this->success('删除成功。',U('User/myorder'));
    		}else {
    			$this->error('删除失败。',U('User/myorder'));;
    		}
    	}
    }
    
    
    //支付结果返回
    function callback() {
	    	require_once ("Home/Lib/ORG/yeepay/yeepayMPay.php");
	    	$merchantaccount=C('merchantaccount');
	    	$merchantPublicKey=C('merchantPublicKey');
	    	$merchantPrivateKey=C('merchantPrivateKey');
	    	$yeepayPublicKey=C('yeepayPublicKey');
	    	
	        $yeepay = new \yeepayMPay($merchantaccount, $merchantPublicKey, $merchantPrivateKey, $yeepayPublicKey);
		    try {
// 		    	$return = $yeepay->callback($_POST['data'], $_POST['encryptkey']);
		    	$return = $yeepay->callback(I('data'), I('encryptkey'));
// 		    	var_dump($return);
// 		    	exit();
		    	$yborderid=$return["yborderid"];
		    	$bank=$return["bank"];
		    	$orderid=$return["orderid"];
// 		    	var_dump($return);
// 		    	exit();
		    	
		    	$info=D("Order");
		    	$info->create();
		    	$info->yborderid=$yborderid;
		    	$info->bank=$bank;
		    	$info->status=1;
		    	$info->pay_time=time();
		    	$rst=$info->where("order_no='{$orderid}'")->save();
		    	
		    	//加销量
		    	$goods=D('Goods');
		    	$order_good=D("order_goods");
		    	$order_goods=$order_good->where("order_no='{$orderid}'")->select();
		    	foreach ($order_goods as $k=>$v) {
		    		$g=$goods->where("goods_id='{$v['goods_id']}'")->find();
		    		$goods->volume=$g['volume']+$v['number'];
		    		$goods->where("goods_id='{$v['goods_id']}'")->save();
		    	}
		    	$this->success('支付成功。',U('User/myorder'));
		    }catch (yeepayMPayException $e) {
		    	$this->error('支付异常。',U('User/myorder'));
		    }
    	if (!empty($_SESSION['username'])) {
    		$username=$_SESSION['username'];
		    $this->assign('username',$username);
		    $this->display('Index/header');
		    $this->display();
		    $this->display('Index/footer');
	    }else {
	    	$this->redirect('User/login');
	    }
    }
}