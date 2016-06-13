<?php
namespace Model;
use Think\Model;
	
	//父类model Thinkphp/Library/Think/Model.class.php
	//购物车数据模型Model
	class CartModel extends Model{
		public function addItem($user_id,$goods_id,$number,$goods_name,$goods_price) {
			$item = array();
	        $item['goods_id'] = $goods_id;
	        $item['goods_name'] = $goods_name;
	        $item['goods_price'] = $goods_price;
	        $item['number'] = $number;
	        
	        //获取商品缩略图
	        $goods=D("Goods");
	        $info=$goods->find($goods_id);
	        $item['goods_small_img'] = $info['goods_small_img'];
	        
	        //购物车数据表中购物车info的信息
	        $data=unserialize($this->getUserid($user_id));
	        
	        //判断加入的商品是否重复
	        $repeat=false;
	        foreach ($data as $k=>$v) {
	        	if ($v["goods_id"]==$goods_id) {
	        		$data[$k]["number"]+=$number;
	        		$repeat=true;
	        	}
	        }
	        if (!$repeat) {
	        	$data[]=$item;
	        }
	        $data=serialize($data);
	        $ndata=array();
	        $ndata["user_id"]=$user_id;
	        $ndata["info"]=$data;
	        
	        //入库
	        $result = $this->add($ndata,array(),true);
	        if($result){
	           return $result;
	        }else {
	           return false;
	        }
		}
		
		//取数据表info信息
		public function getUserid($user_id) {
			return $this->where("user_id='{$user_id}'")->getField("info");
		}
	}
?>