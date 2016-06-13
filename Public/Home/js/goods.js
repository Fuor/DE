//商品数量加
function  d_add(){
    // 获取数量
    var num=parseFloat($('input[name=number]').val());
    var gnum=parseFloat($('input[name=goods_number]').val());
    var price=parseFloat($('input[name=goods_price]').val());
    var tprice=parseFloat($('input[name=totalprice]').val());
    // alert(num);
    if(num < gnum){
         $('input[name=number]').val(Number(num)+1);
         var anum=parseInt($('input[name=number]').val());
    }
}
//商品数量减
function d_minus(){
    // 获取数量
    var num=parseInt($('input[name=number]').val());
    var tprice=parseInt($('input[name=totalprice]').val());
    var price=parseInt($('input[name=goods_price]').val());
     if(num >1){
         $('input[name=number]').val(Number(num)-1);
    }
}
function ValidateNumber(obj){	 
	var regExp = /^[1-9]\d*$/;
	if(!regExp.exec(obj.value)){
		obj.value='';
	}	 
}

function addItem(ajaxurl,datas) {
    $.post(ajaxurl,datas,function(data){
    	if(data.error){
    		alert(data.error);
    	}
    	move();
    	setTimeout(function(){
    		$("#goodsNum").text(data.goodsNum);
    		$("#goodsPrice").text(data.totalPrice);
    	},500);
    });
}

//动画效果
function move(){
	var img = $(".imgInfo").find('img');
	var flyEl = img.clone().css('opacity', 0.7);
	$('body').append(flyEl);
	flyEl.css({
		'z-index': 9000,
		'display': 'block',
		'position': 'absolute',
		'top': img.offset().top +'px',
		'left': img.offset().left +'px',
		'width': img.width() +'px',
		'height': img.height() +'px'
	});
	flyEl.animate({
		top: $('.cart-icon').offset().top,
		left: $('.cart-icon').offset().left,
		width: 20,
		height: 32
	}, 'slow', function() {
		flyEl.remove();
	});
}