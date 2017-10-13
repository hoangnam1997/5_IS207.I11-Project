// crete by Namnh
// hover image and change detail
// function swap img
function onSwapImg($from,$to){
	var $src = $($from).attr('src');
	$($to).attr('src',$src);
	$('.zoomContainer .zoomWindowContainer .zoomWindow').css({'background-image':'url('+$src+')'});
}
$(document).ready(function() {
	// change img
	$('.listImgPrduct .img-loader').on('mouseover',function(){
		$('.listImgPrduct .img-loader').css('border', 'none');
		$(this).css('border', '1px solid #7F7B7B');
		onSwapImg($(this),$('#productImgItem'));
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
	$('.zoom-img').elevateZoom({
		cursor: "zoom-in",
		zoomType: "inner",
		zoomWindowFadeIn: 500,
		zoomWindowFadeOut: 750
	}); 
});


