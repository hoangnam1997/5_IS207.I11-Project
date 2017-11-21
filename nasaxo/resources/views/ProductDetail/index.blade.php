@extends('_layout')
@section('title','Đây là tên Sản phẩm')
@section('link')
@parent
<!-- Swiper css -->
<link rel="stylesheet" type="text/css" href="{!! url('public/css/ProductDetail/swiper.min.css') !!}">
<!-- custom file css -->
<link rel="stylesheet" href="{!! url('public/css/ProductDetail/index.css') !!}">
@stop
@section('content')
<div class="container">
	<div class="row">
		<!-- start infomation product-detail -->
		<div class="product-detail col-xs-12 ">
			<div class="col-xs-2 col-md-1 listImgPrduct">
				<img class="img-loader" src="{!! url('public/images/1.jpeg') !!}">
				<img class="img-loader" src="{!! url('public/images/2.jpeg') !!}">
				<img class="img-loader" src="{!! url('public/images/3.jpeg') !!}">
				<img class="img-loader" src="{!! url('public/images/4.jpg') !!}">
				<img class="img-loader" src="{!! url('public/images/8.png') !!}">
				<img class="img-loader" src="{!! url('public/images/7.jpg') !!}">
				<img class="img-loader" src="{!! url('public/images/9.jpg') !!}">
				<img class="img-loader" src="{!! url('public/images/10.png') !!}">
				<img class="img-loader" src="{!! url('public/images/11.jpg') !!}">
			</div>
			<!-- start product-detail image -->
			<div class="col-md-3 col-xs-5 product-detail-image">
				<img id="product-detailImgItem" class="zoom-img product-detail-imgItem" src="{!! url('public/images/1.jpeg') !!}" alt="First slide">
			</div>
			<!-- end image -->
			<!-- start infomation and select count - color -->
			<div class="product-detail-infomation col-md-7 col-xs-4">
				<span class="head-product-detail">Đây là tên Sản phẩm</span>
				<!-- star of product-detail -->
				<div class="product-detail-star">
					<img src="{!! url('public/images/star-on.png') !!}" alt="1">
					<img src="{!! url('public/images/star-on.png') !!}" alt="2">
					<img src="{!! url('public/images/star-on.png') !!}" alt="3">
					<img src="{!! url('public/images/star-on.png') !!}" alt="4">
					<img src="{!! url('public/images/star-off.png') !!}" alt="5">
				</div>
				<!-- giá -->
				<div class="field-col">
					<span class="product-detail-field">Giá: </span>
					<span class="product-detail-price">100.000đ</span>
					<span class="product-detail-priceOld">200.000đ</span>
					<span class="product-detail-discount">-50%</span>
				</div>
				<!-- end giá -->
				<!-- start size -->
				<div class="field-col">
					<span class="product-detail-field">Size: </span>
					<div class="radio-field">
						<span class="radio-inline">
							<input id="rdSize_1" checked="checked" class="radio-infomation" type="radio" name="size-radio">
							<label for="rdSize_1">
								<span style="background: transparent;">S</span>
							</label>
						</span>
						<span class="radio-inline">
							<input id="rdSize_2" class="radio-infomation" type="radio" name="size-radio">
							<label for="rdSize_2">
								<span style="background: transparent;">M</span>
							</label>
						</span>
						<span class="radio-inline">
							<input id="rdSize_3" class="radio-infomation" type="radio" name="size-radio">
							<label for="rdSize_3">
								<span style="background: transparent;">L</span>
							</label>
						</span>
						<span class="radio-inline">
							<input id="rdSize_4" class="radio-infomation" type="radio" name="size-radio">
							<label for="rdSize_4">
								<span style="background: transparent;">XL</span>
							</label>
						</span>
						<span class="radio-inline">
							<input id="rdSize_5" class="radio-infomation" type="radio" name="size-radio">
							<label for="rdSize_5">
								<span style="background: transparent;">XXL</span>
							</label>
						</span>
					</div>
				</div>
				<!-- end size -->
				<!-- start color -->
				<div class="field-col">
					<span class="product-detail-field">Màu sắt: </span>
					<div class="radio-field">
						<span class="radio-inline">
							<input checked="checked" id="rdColor_1" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_1">
								<span style="background: red;"></span>
							</label>
						</span>
						<span class="radio-inline">
							<input id="rdColor_2" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_2">
								<span style="background: blue;"></span>
							</label>
						</span>
						<span class="radio-inline">
							<input id="rdColor_3" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_3">
								<span style="background: yellow;"></span>
							</label>
						</span>
						<span class="radio-inline">
							<input id="rdColor_4" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_4">
								<span style="background: grey;"></span>
							</label>
						</span>
						<span class="radio-inline">
							<input id="rdColor_5" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_5">
								<span style="background: green;"></span>
							</label>
						</span>
					</div>
				</div>
				<!-- end color -->
				<!-- start số lượng -->
				<div class="field-col">
					<span class="product-detail-field">Số lượng: </span>
					<span class="btn-number">-</span>
					<input  type="number" name="txtNumberproduct-detail" id="txtNumberproduct-detail" value="1">
					<span class="btn-number">+</span>

				</div>
				<!-- end số lượng -->
				<div class="add-cart">
					<div class="btn-addToCart">
						<div class="default-state">
							<span class="fa fa-cart-plus fa-2x"></span>
							<span>Thêm vào giỏ hàng</span>
						</div>
						<div class="active-state">
							<span class="fa fa-cart-plus fa-2x"></span>
							<span>Thêm vào giỏ hàng</span>
						</div>
					</div>
				</div>
			</div>
			<!-- end infomation and select count - color -->
		</div>
		<!-- end infomation product-detail -->
		<!-- start involve product-detail -->
		<div class="product-detail-involve col-xs-12">
			<h4>SẢN PHẨM THƯỜNG ĐƯỢC XEM CÙNG</h4>
			<!-- start slider involve product-detail -->
			<div class="involve-content">
				<div class="swiper-container swiper-container-horizontal swiper-container-free-mode">
					<div class="swiper-wrapper">
						<div class="swiper-slide swiper-slide-active">
							<div class="image-invole" style="background-image: url('{!! url('public/images/1.jpeg') !!}');"></div>
							<span class="title-invole">Sản phẩm liên quan 1</span>
							<span class="price-invole">100.000đ</span>
							<span class="priceOld-invole">200.000đ</span>
							<span class="discount-invole">-50%</span>
						</div>
						<div class="swiper-slide">
							<div class="image-invole" style="background-image: url('{!! url('public/images/2.jpeg') !!}');"></div>
							<span class="title-invole">Sản phẩm liên quan 2</span>
							<span class="price-invole">100.000đ</span>
							<span class="priceOld-invole">200.000đ</span>
							<span class="discount-invole">-50%</span>
						</div>
						<div class="swiper-slide">
							<div class="image-invole" style="background-image: url('{!! url('public/images/3.jpg') !!}');"></div>
							<span class="title-invole">Sản phẩm liên quan 3</span>
							<span class="price-invole">100.000đ</span>
							<span class="priceOld-invole">200.000đ</span>
							<span class="discount-invole">-50%</span>
						</div>
						<div class="swiper-slide">
							<div class="image-invole" style="background-image: url('{!! url('public/images/4.jpg') !!}');"></div>
							<span class="title-invole">Sản phẩm liên quan 4</span>
							<span class="price-invole">100.000đ</span>
							<span class="priceOld-invole">200.000đ</span>
							<span class="discount-invole">-50%</span>
						</div>
						<div class="swiper-slide">
							<div class="image-invole" style="background-image: url('{!! url('public/images/7.jpg') !!}');"></div>
							<span class="title-invole">Sản phẩm liên quan 5</span>
							<span class="price-invole">100.000đ</span>
							<span class="priceOld-invole">200.000đ</span>
							<span class="discount-invole">-50%</span>
						</div>
						<div class="swiper-slide">
							<div class="image-invole" style="background-image: url('{!! url('public/images/8.png') !!}');"></div>
							<span class="title-invole">Sản phẩm liên quan 6</span>
							<span class="price-invole">100.000đ</span>
							<span class="priceOld-invole">200.000đ</span>
							<span class="discount-invole">-50%</span>
						</div>
						<div class="swiper-slide">
							<div class="image-invole" style="background-image: url('{!! url('public/images/9.jpg') !!}');"></div>
							<span class="title-invole">Sản phẩm liên quan 7</span>
							<span class="price-invole">100.000đ</span>
							<span class="priceOld-invole">200.000đ</span>
							<span class="discount-invole">-50%</span>
						</div>
					</div>
					<div class="swiper-button-next" style="z-index: 1000"></div>
					<div class="swiper-button-prev swiper-button-disabled"></div>
				</div>
			</div>
			<!-- end imvolve -->
		</div>
		<!-- end involve product-detail -->
		<!-- start comment -->
		<div class="product-detail-comment col-xs-12">
			<!-- title -->
			<div class="cmt-title">
				<h4>BÌNH LUẬN VỀ SẢN PHẨM</h4>
			</div>
			<!-- end title -->
			<!-- start all cmt -->
			<div class="cmt-container">
				<!-- new cmt -->
				<div class="account-cmt">
					<img class="img-account" src="{!! url('public/images/account.png') !!}">
					<textarea class="txtComment" placeholder="Bạn đang nghĩ gì, Boy?"></textarea>
					<span class="btn-PostComment">Đăng</span>
				</div>
				<!-- end new cmt -->
				<!-- cmt old -->
				<div class="all-cmt">
					<div class="item-cmt">
						<img class="img-account" src="{!! url('public/images/account.png') !!}">
						<div class="body-cmt">
							<span class="item-name">Tên của tôi</span>
							<span class="item-cmt">Sản phẩm này thật tuyệt vời!</span>
							<span class="item-detail" title="16:00 12:10:2017">2 giờ</span>
						</div>
					</div>
					<div class="item-cmt">
						<img class="img-account" src="{!! url('public/images/account.png') !!}">
						<div class="body-cmt">
							<span class="item-name">Tên của tôi</span>
							<span class="item-cmt">Sản phẩm này thật tuyệt vời!</span>
							<span class="item-detail" title="16:00 12:10:2017">2 giờ</span>
						</div>
					</div>
					<div class="item-cmt">
						<img class="img-account" src="{!! url('public/images/account.png') !!}">
						<div class="body-cmt">
							<span class="item-name">Tên của tôi</span>
							<span class="item-cmt">Sản phẩm này thật tuyệt vời!</span>
							<span class="item-detail" title="16:00 12:10:2017">2 giờ</span>
						</div>
					</div>
					<div class="item-cmt">
						<img class="img-account" src="{!! url('public/images/account.png') !!}">
						<div class="body-cmt">
							<span class="item-name">Tên của tôi</span>
							<span class="item-cmt">Sản phẩm này thật tuyệt vời!</span>
							<span class="item-detail" title="16:00 12:10:2017">2 giờ</span>
						</div>
					</div>
				</div>
				<!-- end old cmt -->
			</div>
			<!-- end start all cmt -->
		</div>
		<!-- end comment -->
	</div>
</div>
<!-- end row -->
@stop
@section('script')
@parent
<!-- swiper js -->
<script type="text/javascript" src="{!! url('public/js/ProductDetail/swiper.min.js') !!}"></script>
<!-- elevatezoom -->
<script type="text/javascript" src="{!! url('public/js/ProductDetail/jquery.elevatezoom.js') !!}"></script>
<!-- custom javascript -->
<script type="text/javascript" src="{!! url('public/js/ProductDetail/index.js') !!}"></script>
@stop
