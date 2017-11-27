// crete by Namnh
// hover image and change detail
// function swap img
function onSwapImg($from,$to){
	var $src = $($from).attr('src');
	$($to).attr('src',$src);
	$('.zoomContainer .zoomWindowContainer .zoomWindow').css({'background-image':'url('+$src+')'});
}

// change img
$('.listImgPrduct .img-loader').on('mouseover',function(){
	$('.listImgPrduct .img-loader').css('border', 'none');
	$(this).css('border', '1px solid #7F7B7B');
	onSwapImg($(this),$('#product-detailImgItem'));
	$('.zoomContainer').remove();
	zoomImage('.zoom-img');
});
// involve product
var swiper = new Swiper('.swiper-container', {
	nextButton:'.swiper-button-next',
	prevButton: '.swiper-button-prev',
	pagination: '.swiper-pagination',
	slidesPerView: 5,
	paginationClickable: true,
	spaceBetween: 30,
	freeMode: true
});
// zoom picture
function zoomImage($selecter){
	$($selecter).elevateZoom({
		zoomWindowWidth: 350,
		zoomWindowHeight: 350,
		scrollZoom: true
	}); 
}
zoomImage('.zoom-img');

