//商品减1
function decNums(ajaxurl,datas,el) {
    $.post(ajaxurl,datas,function(data){
    	var number = el.parents().children('.number:eq(0)');
    	var itemSum = el.parents().next(".itemSum:eq(0)");
    	//alert(numDow);
		$("#goodsNum").text(data.goodsNum);
		$("#goodsPrice").text(data.totalPrice);
		$("#itotalPrice").text(data.totalPrice);
		number.val(data.itemNum);
		var sumPrice = (+data.itemNum)*(+data.itemPrice);
		itemSum.text(sumPrice);
		el.nextAll(".add:eq(0)").removeAttr("disabled");
		if(data.itemNum<=1){
			el.attr("disabled",true);
		}
    });
}
//商品加1
function addNums(ajaxurl,datas,el) {
	$.post(ajaxurl,datas,function(data){
		var number = el.parents().children('.number:eq(0)');
		var itemSum = el.parents().next(".itemSum:eq(0)");
		//alert(numDow);
		$("#goodsNum").text(data.goodsNum);
		$("#goodsPrice").text(data.totalPrice);
		$("#itotalPrice").text(data.totalPrice);
		number.val(data.itemNum);
		var sumPrice = (+data.itemNum)*(+data.itemPrice);
		itemSum.text(sumPrice);
		el.prevAll(".numDow:eq(0)").removeAttr("disabled");
		if(data.error){
			el.attr("disabled",true);
			alert(data.error);
			return false;
		}
	});
}
//商品更改
function changeNums(ajaxurl,datas,el) {
	$.post(ajaxurl,datas,function(data){
		//var number = el.parents().children('.number:eq(0)');
		var itemSum = el.parents().children(".itemSum:eq(0)");
		//alert(numDow);
		$("#goodsNum").text(data.goodsNum);
		$("#goodsPrice").text(data.totalPrice);
		$("#itotalPrice").text(data.totalPrice);
		var sumPrice = (+data.itemNum)*(+data.itemPrice);
		itemSum.text(sumPrice);
		if(data.error){
			alert(data.error);
			el.val(data.itemNum);
			return false;
		}
	});
}
