<?php
namespace Admin\Controller;
use Component\AdminController;
class CategoryController extends AdminController{
	//商品分类列表展示
	function showlist() {
		if (!empty($_SESSION['mg_username'])) {
			$cate = M('Category');
	        $cateRow = $cate->order(array('pid'=>'asc'))->select();//查询数据时对parent父级排序
	        $treeObj = new \Model\CategoryModel();
	        $row = $treeObj->getCat($cateRow,$pid = 0, $col_id = 'id', $col_pid = 'pid', $col_cid = 'haschild');
// 			var_dump($row);
// 			exit();
	        $this->assign('row', $row);
			$this->display();
		}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
	}
	
	//添加分类
	function add() {
		if (!empty($_SESSION['mg_username'])) {
			$uid=I('uid');//上级ID
			$cat = M('Category');
			$cate=$cat->where("id='{$uid}'")->find();
// 						var_dump($cate);
// 						exit();
			if (!empty($_POST)) {
				$cat->create();
				$cat->haschild=0;
				$z=$cat->add();
				if($z){
					$cat->where("id='{$_POST['pid']}'")->haschild=1;
					$cat->save();
					$this->success('增加成功。',U('showlist'));
				}
			}
	        $this->assign('cate', $cate);
	        $this->assign('uid', $uid);
			$this->display();
		}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
	}
	
	//分类详情
	function detail($id) {
		if (!empty($_SESSION['mg_username'])) {
			$good=M("goods")->where("goods_category_id='{$id}'");
			$total=$good->count();
			$per=5;
			$page = new \Component\page($total,$per);
			$sql="select * from sw_goods where goods_category_id='{$id}' ".$page->limit;
			$info=$good->query($sql);
			$pagelist= $page-> fpage();
			
			$cat=D('Category')->where("id='{$id}'")->select();
			$cate=array();
			foreach ($cat as $k => $v){
				$cate[$v['id']]=$v['cat_name'];
			}
			
			$this->assign('info', $info);
			$this->assign('cate',$cate);
			$this->assign('pagelist', $pagelist);
			$this->display();
		}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
	}
	
	//分类名称修改
	function upd($id) {
		if (!empty($_SESSION['mg_username'])) {
			if (!empty($_POST)) {
				$cat=D('Category');
				$cat->cat_name=I('cat_name');
				$cat->where("id='{$id}'")->save();
				if ($cat) {
					$this->success("修改成功。",U("showlist"));
				}else {
					$this->error("修改失败。",U("showlist"));
				}
			}else{
				$id=I('id');
				$cat=D('Category')->where("id='{$id}'")->find();
				
				$this->assign("cat",$cat);
				$this->display();
			}
			
		}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
	}
	
	//删除分类
	function del($id) {
		if (!empty($_SESSION['mg_username'])) {
			//判断分类下是否有商品
			$good=M("Goods");
			$z=$good->where("goods_category_id='{$id}'")->find();
			if ($z) {
				$this->error('分类下有商品，不能删除。',U('showlist'));
			}
			
			//判断是否是末级分类
			$cat=M("Category");
			$r=$cat->where("id='{$id}'")->find();
			if ($r['haschild']==1) {
				$this->error('有子类，不能删除。',U('showlist'));
			}else {
				$res=$cat->where("id='{$id}'")->delete();
				if ($res) {
					$this->success('删除成功。',U('showlist'));
				}else {
					$this->error('删除失败，请重试。',U('showlist'));
				}
			}
		}else {
    		$this->error('请登录。',U('Manager/login'));
    	}
	}
}
?>