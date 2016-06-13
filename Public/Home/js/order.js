//计算总价
function  changeprice(){
    // 获取数量
//	var shipping_price  = document.getElementsByName('shipping');
	var shipping_price=$('input:radio:checked').val();
    var allprice=document.getElementById('allprice').value;
//    alert(shipping_price);
//	exit();
    document.getElementById('totalprice').value = parseFloat(shipping_price)+parseFloat(allprice);
}

//判断是否选择快递
//function checkshipping() {
//	var i,myObj;
//	myObj=document.getElementsByName('shipping');
//	for(i=0;i<myObj.length;i++){
//	if(myObj[i].checked){
//		break;
//	}
//	};
//	if(i>=myObj.length){
//	alert("请选择快递再提交");
//	return false;
//	}
//}