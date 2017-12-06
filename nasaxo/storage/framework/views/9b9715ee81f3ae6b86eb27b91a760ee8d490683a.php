<?php if(isset($itemProduct)){?>


<?php $__env->startSection('title'); ?>
<?php echo $itemProduct->Name;?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
##parent-placeholder-4f0aa52d656a3d75867f784b7e9c5d23bf1321c0##
<!-- Swiper css -->
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/ProductDetail/swiper.min.css'); ?>">
<!-- custom file css -->
<link rel="stylesheet" href="<?php echo url('public/css/ProductDetail/index.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<!-- start infomation product-detail -->
		<div class="product-detail col-xs-12 ">
			<div class="col-xs-2 col-md-1 listImgPrduct">
				<?php $listPicture = $itemProduct->Pictures()->get() ?>
				<?php foreach ($listPicture as $valuePicture): ?>
					<img class="img-loader" src="<?php echo url('public/images'); ?>/<?php echo  $valuePicture->Url; ?>">
				<?php endforeach ?>
			</div>
			<!-- start product-detail image -->
			<div class="col-md-3 col-xs-5 product-detail-image">
				<img id="product-detailImgItem" class="zoom-img product-detail-imgItem" src="<?php echo url('public/images'); ?>/<?php echo isset($listPicture[0]) ? $listPicture[0]->Url : 'default.jpg'; ?>" alt="First slide">
			</div>
			<!-- end image -->
			<!-- start infomation and select count - color -->
			<div class="product-detail-infomation col-md-7 col-xs-4">
				<span class="head-product-detail"><?php echo $itemProduct->Name; ?></span>
				<!-- star of product-detail -->
				<div class="product-detail-star">
					<img src="<?php echo url('public/images/star-on.png'); ?>" alt="1">
					<img src="<?php echo url('public/images/star-on.png'); ?>" alt="2">
					<img src="<?php echo url('public/images/star-on.png'); ?>" alt="3">
					<img src="<?php echo url('public/images/star-on.png'); ?>" alt="4">
					<img src="<?php echo url('public/images/star-off.png'); ?>" alt="5">
				</div>
				<!-- giá -->
				<div class="field-col">
					<?php $price = $itemProduct->Prices()->whereNull('EndDate')->get()[0]; ?>
					<span class="product-detail-field">Giá: </span>
					<span class="product-detail-price"><?php echo $price->Price - ($price->Price * $price->Discount / 100); ?> VNĐ</span>
					<span class="product-detail-priceOld"><?php echo $price->Price; ?> VNĐ</span>
					<span class="product-detail-discount">-<?php echo $price->Discount; ?> %</span>
				</div>
				<!-- end giá -->
				<!-- start size -->
				<?php $listSize = $itemProduct->Sizes()->where([['ProductSize.IsDelete','=',false]])->get(); 
				if(count($listSize)>0){?>
				<div class="field-col">
					<span class="product-detail-field">Kích thước: </span>
					<!-- danh sách kích thứóc -->
					<span class="radio-inline">
						<!-- lấy danh kích cở -->
						<?php foreach ($listSize as $valueSize) {?>
						<input id="rdSize_<?php echo $itemProduct->id; ?>_<?php echo $valueSize->id; ?>" class="radio-infomation" type="radio" name="rdSize_<?php echo $itemProduct->id; ?>" data-size="<?php echo $valueSize->id; ?>" >
						<label for="rdSize_<?php echo $itemProduct->id; ?>_<?php echo $valueSize->id; ?>">
							<!-- value size -->
							<span style="background: transparent;"><?php echo $valueSize->Sizes ?></span>
						</label>
						<?php } ?>
					</span>
				</div>
				<br>
				<?php } ?>
				<!-- end size -->
				<!-- start color -->
				<?php 
							// lấy danh sách không bị delete
				$colorProduct = $itemProduct->Colors()->where([['ProductColor.IsDelete','=',false]])->get();
				if(count($colorProduct)>0){?>
				<div class="field-col">
					<span class="product-detail-field">Màu sắc: </span>
					<div class="radio-field">
						<span class="radio-inline">
							<!-- lấy danh sách màu sắt -->
							<?php foreach ($colorProduct as $valueColor) {?>
							<input id="rdColor_<?php echo $itemProduct->id; ?>_<?php echo $valueColor->id; ?>" class="radio-infomation" type="radio" name="rdColor_<?php echo $itemProduct->id; ?>" data-color="<?php echo $valueColor->id; ?>" >
							<label for="rdColor_<?php echo $itemProduct->id; ?>_<?php echo $valueColor->id; ?>">
								<span style="background: #<?php echo $valueColor->Color ?>;"></span>
							</label>
							<?php } ?>
						</span>
					</div>
				</div>
				<?php } ?>
				<!-- end color -->
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
						<?php $listProductInvolve = $itemProduct->ProductCategory()->get()[0]->Products()->where([['IsDelete','=',false]])->get();
						?>
						<?php foreach ($listProductInvolve as $valueInvolve) { ?>
						<?php $priceInvolve = $valueInvolve->Prices()->whereNull('EndDate')->get()[0]; ?>
						<div class="swiper-slide" title="<?php echo $valueInvolve->Name; ?>" onclick="detailProduct(<?php echo $valueInvolve->id; ?>)"">
							<div class="image-invole" style="background-image: url('<?php echo url('public/images/'); ?>/<?php echo $valueInvolve->Pictures()->get()[0]->Url; ?>');"></div>
							<span class="title-invole"><?php echo substr($valueInvolve->Name,0,22).' ...' ?></span>
							<span class="price-invole"><?php echo $priceInvolve->Price - ($priceInvolve->Price * $priceInvolve->Discount / 100); ?> VNĐ</span>
							<span class="priceOld-invole"><?php echo $priceInvolve->Price ?> VNĐ</span>
							<span class="discount-invole">-<?php echo $priceInvolve->Discount; ?>%</span>
						</div>
						<?php } ?>
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
					<img class="img-account" src="<?php echo url('public/images/account.png'); ?>">
					<textarea class="txtComment" placeholder="Bạn đang nghĩ gì, Boy?"></textarea>
					<span class="btn-PostComment">Đăng</span>
				</div>
				<!-- end new cmt -->
				<!-- cmt old -->
				<div class="all-cmt">
					<div class="item-cmt">
						<img class="img-account" src="<?php echo url('public/images/account.png'); ?>">
						<div class="body-cmt">
							<span class="item-name">Tên của tôi</span>
							<span class="item-cmt">Sản phẩm này thật tuyệt vời!</span>
							<span class="item-detail" title="16:00 12:10:2017">2 giờ</span>
						</div>
					</div>
					<div class="item-cmt">
						<img class="img-account" src="<?php echo url('public/images/account.png'); ?>">
						<div class="body-cmt">
							<span class="item-name">Tên của tôi</span>
							<span class="item-cmt">Sản phẩm này thật tuyệt vời!</span>
							<span class="item-detail" title="16:00 12:10:2017">2 giờ</span>
						</div>
					</div>
					<div class="item-cmt">
						<img class="img-account" src="<?php echo url('public/images/account.png'); ?>">
						<div class="body-cmt">
							<span class="item-name">Tên của tôi</span>
							<span class="item-cmt">Sản phẩm này thật tuyệt vời!</span>
							<span class="item-detail" title="16:00 12:10:2017">2 giờ</span>
						</div>
					</div>
					<div class="item-cmt">
						<img class="img-account" src="<?php echo url('public/images/account.png'); ?>">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<!-- swiper js -->
<script type="text/javascript" src="<?php echo url('public/js/ProductDetail/swiper.min.js'); ?>"></script>
<!-- elevatezoom -->
<script type="text/javascript" src="<?php echo url('public/js/ProductDetail/jquery.elevatezoom.js'); ?>"></script>
<!-- custom javascript -->
<script type="text/javascript" src="<?php echo url('public/js/ProductDetail/index.js'); ?>"></script>
<?php $__env->stopSection(); ?>
<?php } ?>

<?php echo $__env->make('_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>