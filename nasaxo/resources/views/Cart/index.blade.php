@extends('_layout')
@section('title') Quản lý giỏ hàng @stop
@section('link')
@parent
<link rel="stylesheet" type="text/css" href="{!! url('public/css/Cart/Cart.css') !!}">
@stop
@section('content')
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
						<img class="img-responsive thumbnail" src="{!! url('public/images') !!}/<?php echo $productItem->Pictures()->get()[0]->Url ?>"></img>
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
							<!-- danh sách kích thứóc -->
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
		<form enctype="multipart/form-data" action="{!! url('/cart/order') !!}" method="POST" name="frmBuy">
			{{csrf_field()}}	
			<div class="button-Order">
				<button type="submit" id="btnBuyProduct" class="col-md-4 col-md-push-7 btn btn-danger">Đặt hàng</button>
			</div>
		</form>
	</div>

</div>
@stop
<!-- my js -->
@section('script')
@parent
<script type="text/javascript" src="{!! url('public/js/Cart/index.js') !!}"></script>
@stop

