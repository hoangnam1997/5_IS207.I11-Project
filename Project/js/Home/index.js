// create by namnh
// slider owl-carousel
$(document).ready(function(){
	//.owl-carousel element có class có tên như thế này đều chạy
	// #ad lấy theo element có id là ad
	$('#slider').owlCarousel({
	margin: 10,//magin các hình
	loop: true,
	items:1,//số item
	autoplay:true,//tự động chạy
    autoplayTimeout:3000//thời gian
	});
}); 
