// create by namnh
// create table from data listDataTable 
var columnFormat = {
	"tr": {
			// "class": "col"
		},
		"td": [{
			// "class": "",
			"text": "#STT#"
		},{
			"class":"positionLeft",
			"text": "#Picture#"
		},{
			// "class": "",
			"text": "#Name#"
		},{
			// "class": "",
			"text": "#ProductCategory#"
		},{
			// "class": "",
			"text": "#Price#<label class='lable-detail' data-detail='#id#'>Chi tiết</label>"
		},{
			// "class": "",
			"text": "#Description#"
		},{
			// "class": "",
			"text": "#Action#"
		}
		]
	};
	var columnFormatPrice = {
		"tr": {
			// "class": "col"
		},
		"td": [{
			// "class": "",
			"text": "#STT#"
		},{
			"text": "#StartDay#"
		},{
			// "class": "",
			"text": "#EndDay#"
		},{
			// "class": "",
			"text": "#Price#"
		},{
			// "class": "",
			"text": "#Discount#"
		}
		]
	};
//function onclick detail 
function onClickDetail($element){
	$idSearchPrice = $($element).data('detail');
	var _token = $('meta[name="_token"]').attr('content');
	// tạo ra đường dẫn route
	urlNew = url + '/admin/product/prices';
	// thực hiện lấy view về
	$.ajax({
		type:"POST",
		url: urlNew,
		cache:false,
		data:{'_token':_token,'idSend':$idSearchPrice},
		success:function($re){
			if($re == '0'){
				console.log($re);
			}else{
				// phaan trang list gia
				$("#tablePrice").PagingTable(columnFormatPrice,JSON.parse($re));
			}
		}
	});
	
}
function pageLoaded(){
	$('.editItem').attr('data-toggle','modal');
	$('.editItem').attr('data-target','#ProductModal');
	$('.lable-detail').attr('data-toggle','modal');
	$('.lable-detail').attr('data-target','#PriceDetailModal');
	$('.lable-detail').on('click',function(){
		onClickDetail(this);
	});

	// Xóa sản phẩm
	$('.deleteItem').off('click').on('click',function(){
		if(confirm('Bạn muốn xóa sản phẩm đã chọn?')){
			$idDelete = $(this).data('delete');
			var _token = $('meta[name="_token"]').attr('content');
			// tạo ra đường dẫn route
			urlNew = url + '/admin/product/delete';
			// thực hiện lấy view về
			$.ajax({
				type:"POST",
				url: urlNew,
				cache:false,
				data:{'_token':_token,'idSend':$idDelete},
				success:function($re){
					if($re != '1'){
						console.log($re);
					}else{
						inat.DeleteItemInListRowTable('id',$idDelete);
					}
				}
			});
		}
	});
}
var inat = $("#table-content").PagingTable(columnFormat,listDataTable,pageLoaded);