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
			<h3>Giỏ hàng <span>(3 sản phẩm)</span></h3>
		</div>
	</div>
</div>

<div class="container">
	<div class="Shoppingcart">
		<div class="cart-product">
			<div class="row">										
				<div class="col-md-3 product_image">
					<img class="img-responsive thumbnail" src="{!! url('public/images/1.jpeg') !!}"></img>
				</div>

				<div class="col-md-4 name">
					<h3><a href="">Đầm len thắt nơ eo sang trọng</a><br></h3>

					<div class="color">
						<p class="product-field">Màu sắc: </p>
						<span class="radio-inline">
							<input id="rdColor_1" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_1">
								<span style="background: red;"></span>
							</label>
						</span>
					</div>
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
				</div>					
				<div class="price col-md-2" >440.000 đ</div>


				<div class="col-md-2 Numberofproduct ">

					<span class="btn-number">-</span>
					<input  type="input" name="txtNumberProduct" id="txtNumberProduct" value="1">
					<span class="btn-number">+</span>
				</div>

				<div class="col-md-1 delete">
					<button class="btn btn-default btnCart btn-delete ">
						<span class="glyphicon glyphicon-trash"></span>							 									 	
					</button>
				</div>
			</div> <!-- end row-->

		</div> <!-- end  product-->

		<div class="cart-product">
			<div class="row">										
				<div class="col-md-3 product_image">
					<img class="img-responsive thumbnail" src="{!! url('public/images/1.jpeg') !!}"></img>
				</div>

				<div class="col-md-4 name">
					<h3><a href="">Đầm len thắt nơ eo sang trọng</a><br></h3>

					<div class="color">
						<p class="product-field">Màu sắc: </p>
						<span class="radio-inline">
							<input id="rdColor_1" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_1">
								<span style="background: red;"></span>
							</label>
						</span>
					</div>

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
				</div>					
				<div class="price col-md-2" >440.000 đ</div>


				<div class="col-md-2 Numberofproduct ">

					<span class="btn-number">-</span>
					<input  type="input" name="txtNumberProduct" id="txtNumberProduct" value="1">
					<span class="btn-number">+</span>
				</div>
				<div class="col-md-1 delete">
					<button class="btn btn-default btnCart btn-delete ">
						<span class="glyphicon glyphicon-trash"></span>							 									 	
					</button>
				</div>
			</div> <!-- end row-->

		</div>


		<div class="cart-product">
			<div class="row">										
				<div class="col-md-3 product_image">
					<img class="img-responsive thumbnail" src="{!! url('public/images/1.jpeg') !!}"></img>
				</div>


				<div class="col-md-4 name">
					<h3><a href="">Đầm len thắt nơ eo sang trọng</a><br></h3>

					<div class="color">
						<p class="product-field">Màu sắc: </p>
						<span class="radio-inline">
							<input id="rdColor_1" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_1">
								<span style="background: red;"></span>
							</label>
						</span>
					</div>

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
				</div>					
				<div class="price col-md-2" >440.000 đ</div>


				<div class="col-md-2 Numberofproduct ">

					<span class="btn-number">-</span>
					<input  type="input" name="txtNumberProduct" id="txtNumberProduct" value="1">
					<span class="btn-number">+</span>
				</div>
				<div class="col-md-1 delete">
					<button class="btn btn-default btnCart btn-delete ">
						<span class="glyphicon glyphicon-trash"></span>							 									 	
					</button>
				</div>
			</div> <!-- end row-->

		</div> <!-- end  product-->

		<div class="cart-product">
			<div class="row">										
				<div class="col-md-3 product_image">
					<img class="img-responsive thumbnail" src="{!! url('public/images/1.jpeg') !!}"></img>
				</div>

				<div class="col-md-4 name">
					<h3><a href="">Đầm len thắt nơ eo sang trọng</a></h3><br>

					<div class="color">
						<p class="product-field">Màu sắc: </p>
						<span class="radio-inline">
							<input id="rdColor_1" class="radio-infomation" type="radio" name="color-radio">
							<label for="rdColor_1">
								<span style="background: red;"></span>
							</label>
						</span>
					</div>

					<div class="Size">
						<p class="product-field">Kích thước: </p>
						<span class="radio-inline">
							<input id="rdSize_1"  class="radio-infomation" type="radio" name="size-radio">
							<label for="rdSize_1">
								<span style="background: transparent;">S</span>
							</label>
						</span>
					</div>
					<br>
				</div>					
				<div class="price col-md-2" >440.000 đ</div>


				<div class="col-md-2 Numberofproduct ">

					<span class="btn-number">-</span>
					<input  type="input" name="txtNumberProduct" id="txtNumberProduct" value="1">
					<span class="btn-number">+</span>
				</div>
				<div class="col-md-1 delete">
					<button class="btn btn-default btnCart btn-delete ">
						<span class="glyphicon glyphicon-trash"></span>							 									 	
					</button>
				</div>
			</div> <!-- end row-->

		</div> <!-- end  product-->

	</div> <!-- end Shopping-cart -->
</div>
<!--   Đặt hàng -->
<div class="container">
	<div class="total-prices">
		<div class="row">
			<h3 class="col-md-3 col-md-push-8">Tổng tiền:</h3>
			<h3  class="col-md-3 col-md-push-7">382.000 đ</h3>
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

