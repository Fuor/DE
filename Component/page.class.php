<?php
namespace Component;
	class Page {
		private $all; //数据表中总记录数
		private $listRows; //列表每页显示行数
		private $limit;
		private $url; //当前页地址
		private $pageNum; //页数
		private $config=array(
				'header'=>"条记录", 
				"pre"=>"<<", 
				"next"=>">>", 
				"first"=>"第一页", 
				"last"=>"最后一页");
		private $listNum=8;
		/*
		 * $all 
		 * $listRows
		 */
		public function __construct($all, $listRows=10, $pa=""){
			$this->all=$all;
			$this->listRows=$listRows;
			$this->url=$this->geturl($pa);
			$this->page=!empty($_GET["page"]) ? $_GET["page"] : 1;
			$this->pageNum=ceil($this->all/$this->listRows);
			$this->limit=$this->setLimit();
		}

		//自定义单页显示记录数
		private function setLimit(){
			return "Limit ".($this->page-1)*$this->listRows.", {$this->listRows}";
		}
		
		//生成地址
		private function geturl($pa){
			$url=$_SERVER["REQUEST_url"].(strpos($_SERVER["REQUEST_url"], '?')?'':"?").$pa;
			$parse=parse_url($url);

			if(isset($parse["query"])){
				parse_str($parse['query'],$params);
				unset($params["page"]);
				$url=$parse['path'].'?'.http_build_query($params);
			}
			return $url;
		}

		function __get($args){
			if($args=="limit")
				return $this->limit;
			else
				return null;
		}

		private function start(){
			if($this->all==0)
				return 0;
			else
				return ($this->page-1)*$this->listRows+1;
		}

		private function end(){
			return min($this->page*$this->listRows,$this->all);
		}

		//第一页
		private function first(){
            $html = "";
			if($this->page==1)
				$html.='';
			else
				$html.="&nbsp;&nbsp;<a href='{$this->url}&page=1'>{$this->config["first"]}</a>&nbsp;&nbsp;";
			return $html;
		}

		//前一页
		private function pre(){
            $html = "";
			if($this->page==1)
				$html.='';
			else
				$html.="&nbsp;&nbsp;<a href='{$this->url}&page=".($this->page-1)."'>{$this->config["pre"]}</a>&nbsp;&nbsp;";
			return $html;
		}

		//页码列表
		private function pageList(){
			$linkPage="";
			$inum=floor($this->listNum/2);
			for($i=$inum; $i>=1; $i--){
				$page=$this->page-$i;
				if($page<1)
					continue;
				$linkPage.="&nbsp;<a href='{$this->url}&page={$page}'>{$page}</a>&nbsp;";
			}
			$linkPage.="&nbsp;{$this->page}&nbsp;";
			for($i=1; $i<=$inum; $i++){
				$page=$this->page+$i;
				if($page<=$this->pageNum)
					$linkPage.="&nbsp;<a href='{$this->url}&page={$page}'>{$page}</a>&nbsp;";
				else
					break;
			}
			return $linkPage;
		}

		//下一页
		private function next(){
            $html = "";
			if($this->page==$this->pageNum)
				$html.='';
			else
				$html.="&nbsp;&nbsp;<a href='{$this->url}&page=".($this->page+1)."'>{$this->config["next"]}</a>&nbsp;&nbsp;";
			return $html;
		}

		//最后一页
		private function last(){
            $html = "";
			if($this->page==$this->pageNum)
				$html.='';
			else
				$html.="&nbsp;&nbsp;<a href='{$this->url}&page=".($this->pageNum)."'>{$this->config["last"]}</a>&nbsp;&nbsp;";
			return $html;
		}

		//前往指定页面
		private function gotoPage(){
			return '&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>'.$this->pageNum.')?'.$this->pageNum.':this.value;location=\''.$this->url.'&page=\'+page+\'\'}" value="'.$this->page.'" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>'.$this->pageNum.')?'.$this->pageNum.':this.previousSibling.value;location=\''.$this->url.'&page=\'+page+\'\'">&nbsp;&nbsp;';
		}
		
		//格式化分页列表
		function fpage($display=array(0,1,2,3,4,5,6,7,8)){
			$html[0]="&nbsp;&nbsp;共<b>{$this->all}</b>{$this->config["header"]}&nbsp;&nbsp;";
			$html[1]="&nbsp;&nbsp;每页显示<b>".($this->end()-$this->start()+1)."</b>条，本页<b>{$this->start()}-{$this->end()}</b>条&nbsp;&nbsp;";
			$html[2]="&nbsp;&nbsp;<b>第{$this->page}页/共{$this->pageNum}</b>页&nbsp;&nbsp;";
			//var_dump($html[2]);
			//exit();
			$html[3]=$this->first();//第一页方法
			$html[4]=$this->pre();//前一页方法
			$html[5]=$this->pageList();//页码列方法
			$html[6]=$this->next();//下一页方法
			$html[7]=$this->last();//最后一页方法
			$html[8]=$this->gotoPage();//到指定页方法
			$fpage='';
			//按排序输出
			foreach($display as $v){
				$fpage.=$html[$v];
			}
			return $fpage;
		}
	}