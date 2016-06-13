function loadCat(cId,cType) {
//	alert("kakakak");
    $.post(ajaxurl,{'cId':cId},function(data){
//    	alert("kakakak");
        if(cType=='cat'){
        	$('#'+cType).html('<option value="">选择小类</option>');
           }
        if(cType!='null'){
            $.each(data,function(no,items){
                $('#'+cType).append('<option value="'+items.id+'">'+items.cat_name+'</option>');
            });
        }
    });
}