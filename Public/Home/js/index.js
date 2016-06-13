/*图片动画*/
$(document).ready(function(){
	//焦点图
	$(function() {
	    myFocus.set({
	        id : 'focus',// 焦点图盒子ID
	        pattern : 'mF_fancy',// 风格应用的名称
	        time : 3,// 切换时间间隔(秒)
	        trigger : 'click',// 触发切换模式:'click'(点击)/'mouseover'(悬停)
	        width : 680,// 设置图片区域宽度(像素)
	        height :460,// 设置图片区域高度(像素)
	        txtHeight : '0'// 文字层高度设置(像素),'default'为默认高度，0为隐藏
	    });
	});
	
	//图片动画
	$(function(){
		$("#show_hot_area img").mouseover(function(){ 
			$this=$(this);
			$this.animate({
				opacity:'0.6',
			},'fast');
		}); 
		$("#show_hot_area img").mouseout(function(){ 
			$this=$(this);
			$this.animate({
				opacity:'1',
			},'fast');
		}); 
	});
	
});
