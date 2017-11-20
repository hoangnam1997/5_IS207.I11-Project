// create by namnh
// go to view product
var pageProduct ={
	'pageList' : 0,
	'numberRecord':12,
	'productCategory':'',
	'nameProduct':'',
}
function seeMoreProduct(){
	pageProduct.pageList++;
	var _token = $('meta[name="_token"]').attr('content');
	urlAjax = url +'/SeeMoreProducts';
	$.ajax({
		url: urlAjax,
		type:"POST",
		data:{'_token':_token,'pageList':pageProduct.pageList,'numberRecord':pageProduct.numberRecord,'productCategory':pageProduct.productCategory,'nameProduct':pageProduct.nameProduct},
		success: function($re){
			$('#productList').append($re);
		}
	});
}
$('.clickDetail').on('click',function(){
	newUrl = url +'/product?id='+'1';
	window.open(newUrl,'_blank');
});
$('#seeMoreProduct').on('click',function(){
	seeMoreProduct();
});