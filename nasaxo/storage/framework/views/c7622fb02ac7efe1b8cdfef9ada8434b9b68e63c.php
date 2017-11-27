
<?php $__env->startSection('title'); ?> Quản lý giỏ hàng <?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
##parent-placeholder-4f0aa52d656a3d75867f784b7e9c5d23bf1321c0##
<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/Cart/Cart.css'); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Giỏ hàng <span>(<?php echo isset($listCartProduct) ?  count($listCartProduct) : 0?> sản phẩm)</span></h3>
		</div>
	</div>
</div>

<div class="container">
	<div class="Shoppingcart">
		<?php if(isset($listCartProduct) && count($listCartProduct)>0){
			$sumPrice = 0;
			foreach ($listCartProduct as $value) {?>
			<?php 
			$productItem = $value->Product()->get()[0];
			// kiêm tra tồn tại
			if(!isset($productItem)){
				break;
			}
			?>
			<!-- product item -->
			<div class="cart-product">
				<div class="row">
					<!-- image products -->
					<div class="col-md-3 product_image">
						<img class="img-responsive thumbnail" src="<?php echo url('public/images'); ?>/<?php echo $productItem->Pictures()->get()[0]->Url ?>"></img>
					</div>
					<!-- name -->
					<div class="col-md-4 name">
						<h3><a href=""><?php echo $productItem->Name; ?></a><br></h3>

						<div class="color">
							<p class="product-field">Màu sắc: </p>
							<span class="radio-inline">
								<input id="rdColor_1" class="radio-infomation" type="radio" name="color-radio">
								<label for="rdColor_1">
									<span style="background: red;"></span>
								</label>
							</span>
						</div>
						<!-- lấy danh sách size -->
						<?php $listSize = $productItem->Sizes()->get(); 
						if(count($listSize)>0){?>
						<div class="Size">
							<p class="product-field">Kích thước: </p>
							<span class="radio-inline">
								<input id="rdSize_1" class="radio-infomation" type="radio" name="size-radio">
								<label for="rdSize_1">
									<span style="background: transparent;">S</span>
								</label>
							</span>
						</div>
						<br>
						<?php 
					}
					?>
				</div>
				<!-- giá product -->
				<div class="price col-md-2" ><?php
				$price=	$productItem->Prices()->whereNull('endDate')->get(); 
				if(count($price)>0){
					$sumPrice +=$price[0]['Price'];
					echo $price[0]['Price']." VNĐ";
				} 
				?></div>
				<!-- số lượng -->
				<div class="col-md-2 Numberofproduct ">
					<span class="btn-number">-</span>
					<input  type="input" name="txtNumberProduct" id="txtNumberProduct" value="<?php echo $value->Count; ?>">
					<span class="btn-number">+</span>
				</div>

				<div class="col-md-1 delete">
					<button class="btn btn-default btnCart btn-delete ">
						<span class="glyphicon glyphicon-trash"></span>							 									 	
					</button>
				</div>
			</div> <!-- end row-->

		</div> <!-- end  product-->


		<?php
	}
	?>


	<?php 
}else{
	
} ?>


</div> <!-- end Shopping-cart -->
</div>
<!--   Đặt hàng -->
<div class="container">
	<div class="total-prices">
		<div class="row">
			<h3 class="col-md-3 col-md-push-8">Tổng tiền:</h3>
			<h3  class="col-md-3 col-md-push-7"><?php if(isset($sumPrice)){ echo $sumPrice;} ?> VNĐ</h3>
		</div>
	</div>
	<div class="row">
		<form enctype="multipart/form-data" action="<?php echo url('/cart/order'); ?>" method="POST" name="frmBuy">
			<?php echo e(csrf_field()); ?>	
			<div class="button-Order">
				<button type="submit" id="btnBuyProduct" class="col-md-4 col-md-push-7 btn btn-danger">Đặt hàng</button>
			</div>
		</form>
	</div>

</div>
<?php $__env->stopSection(); ?>
<!-- my js -->
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script type="text/javascript" src="<?php echo url('public/js/Cart/index.js'); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>