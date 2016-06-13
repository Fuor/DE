<?php
namespace Admin\Controller;
use Component\AdminController;
class GoodsController extends AdminController{
	//商品列表展示
	function showlist() {
		if (!empty($_SESSION['mg_username'])) {
			//使用Model数据模型
			//实例化模型对象三种方式
			//$goods=new \Model\GoodsModel();//常规
			//$goods=D("Goods");//D方法
			//$goods=D();//类似M方法
			$goods=M("Goods");//或$goods=D();表示实际操作的方法
			//1.获取记录总条数
			$total=$goods->count();
			$per=5;
			//2.实例化分页对象
			$page = new \Component\page($total,$per);
			//3.拼接SQL语句
			$sql="select * from sw_goods order by goods_create_time desc ".$page->limit;
			$info=$goods->query($sql);
			
			//
			$cat=D('Category')->select();
			$cate=array();
			foreach ($cat as $k => $v){
				$cate[$v['id']]=$v['cat_name'];
			}
			//4.页码列表
			$pagelist= $page-> fpage();
			//5.把数据assign到模板
			$this->assign('info',$info);
			$this->assign('cate',$cate);
			$this->assign('pagelist',$pagelist);
			$this->display();
		}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
	}
	
  	//获取分类
  	function getCat(){
  		$where['pid']=I('cId');
  		$cat=D('Category')->where($where)->select();
  		$this->ajaxReturn($cat);
  	}
  	
	//添加商品
	function add() {
		$goods=D("Goods");
		if (!empty($_POST)) {
			//判断是否上传了图片
			if (!empty($_FILES)) {
				//设置主图保存参数
				$config = array(
					'rootPath'      =>  './Public/', //保存根路径
					'savePath'      =>  'upload/', //保存路径
				);
				$upload= new \Think\Upload($config);
				$z=$upload ->uploadOne($_FILES['goods_img']);
				if (!$z) {
					$this-> error('主图上传失败，请重新上传。');
				}else {
					//获得图片路径
					$bigImg= $z['savepath'].$z['savename'];
					$_POST['goods_big_img']= $bigImg;
					
					//制作缩略图
					$image= new \Think\Image();
					$srcimg=$upload->rootPath.$bigImg;
					$image->open($srcimg);
					$image->thumb(150,150);//按比例缩小
					$smallimg=$z['savepath']."small_".$z['savename'];
					$image->save($upload->rootPath.$smallimg);
					$_POST['goods_small_img']= $smallimg;
				}
			}
			$_POST['goods_create_time']= time();
			$goods -> create();//收集表单数据
			$z= $goods -> add();
			if ($z) {
				$this-> success('添加商品成功。',U('Goods/showlist'));
			}else {
				$this-> error('添加商品失败。',U('Goods/showlist'));
			}
		}else {
			//获取一级分类
			$cat=D('Category')->where(array('pid'=>0))->select();
			
			$this->assign('cat',$cat);
			$this->display();
		}
		
	}
	
	//修改商品
	function update($goods_id) {
		//查询被修改商品信息然后传递给模板展示
		$goods=D("Goods");
		
		if (!empty($_POST)){
			//判断是否上传了图片
			if (!empty($_FILES['goods_img'])) {
				//设置主图保存参数
				$config = array(
						'rootPath'      =>  './Public/', //保存根路径
						'savePath'      =>  'upload/', //保存路径
				);
				$upload= new \Think\Upload($config);
				$z=$upload ->uploadOne($_FILES['goods_img']);
				if ($z) {
					//获得图片路径
					$bigImg= $z['savepath'].$z['savename'];
					$_POST['goods_big_img']= $bigImg;
					
					//制作缩略图
					$image= new \Think\Image();
					$srcimg=$upload->rootPath.$bigImg;
					$image->open($srcimg);
					$image->thumb(150,150);//按比例缩小
					$smallimg=$z['savepath']."small_".$z['savename'];
					$image->save($upload->rootPath.$smallimg);
					$_POST['goods_small_img']= $smallimg;
				}
			}
			$goods->create();
			$rst=$goods->save();
			if ($rst) {
				$this->success('更新成功。',U('showlist'));
			}else {
				$this->success('更新失败。',U('showlist'));;
			}
		}else{
			//获取要修改商品信息
			$info=$goods->find($goods_id);
			
			//获取一级分类
			$cat=D('Category')->where(array('pid'=>0))->select();
				
			$this->assign('cat',$cat);
			$this->assign("info",$info);
			$this->display();
		}
	}
	
    //商品查找
    function search() {
    	if (!empty($_SESSION['mg_username'])) {
    		if (!empty($_POST)) {
    			$key=$_POST['key'];
    			//获取商品信息
    			$goods=D('Goods');
    			$where['_string']="(goods_no ='{$key}') or (goods_name like '%{$key}%')";
    			$info=$goods->where($where)->select();
    			if ($info) {
    				$this->assign('info',$info);
    				$this->display();
    			}else {
    				$this->error('没有查到。',U('showlist',5));
    			}
    		}else {
    			$this->error('请输入查找条件。',U('showlist'),5);
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //删除商品
    function del($goods_id) {
    	if (!empty($_SESSION['mg_username'])) {
    		$info=M("Goods");
    		$z=$info->where("goods_id='{$goods_id}'")->delete();
    		if ($z) {
    			$this->success('删除成功。',U('showlist'));
    		}else {
    			$this->error('删除失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //上架商品
    function up($goods_id) {
    	if (!empty($_SESSION['mg_username'])) {
    		$info=M("Goods");
    		$info->where("goods_id='{$goods_id}'")->status=1;
    		$z=$info->save();
    		if ($z) {
    			$this->success('上架成功。',U('showlist'));
    		}else {
    			$this->error('上架失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //下架商品
    function down($goods_id) {
    	if (!empty($_SESSION['mg_username'])) {
    		$info=M("Goods");
    		$info->where("goods_id='{$goods_id}'")->status=0;
    		$z=$info->save();
    		if ($z) {
    			$this->success('下架成功。',U('showlist'));
    		}else {
    			$this->error('下架失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //推荐商品
    function is_hot($goods_id) {
    if (!empty($_SESSION['mg_username'])) {
    		$info=M("Goods");
    		$info->where("goods_id='{$goods_id}'")->hot=1;
    		$z=$info->save();
    		if ($z) {
    			$this->success('推荐成功。',U('showlist'));
    		}else {
    			$this->error('推荐失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
    
    //取消推荐
    function not_hot($goods_id) {
    	if (!empty($_SESSION['mg_username'])) {
    		$info=M("Goods");
    		$info->where("goods_id='{$goods_id}'")->hot=0;
    		$z=$info->save();
    		if ($z) {
    			$this->success('取消成功。',U('showlist'));
    		}else {
    			$this->error('取消失败。',U('showlist'));;
    		}
    	}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
    }
}
?>