// crete by Namnh
// hover image and change detail
$(document).ready(function($) {
	$('.listImgPrduct .img-loader').on('mouseover',function(){
		$('.listImgPrduct .img-loader').css('border', 'none');
		$(this).css('border', '1px solid #7F7B7B');
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


