@extends('_layout')
<!-- content-body -->
@section('content')
<div class="content-body">
	@section('discount')
	<!-- discount -->
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img  src="{!! url('public/images/carouse_3.jpg') !!}" class="img-responsive">
			</div>
			<div class="item">
				<img  src="{!! url('public/images/carousel_3.jpg') !!}" class="img-responsive">
			</div>
			<div class="item">
				<img  src="{!! url('public/images/carouse_2.jpg') !!}" class="img-responsive">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>	
	<!-- 	end discount -->
	@show
	<!--  product -->
	@section('product')
	<div class="content text-center">
		<h1><b>Welcome</b> to Nasaxo Shop</h1>
		<p>BEST PRODUCTS YOU EVER SEEN!</p>
	</div>
	<div class="container">
		<!-- nội dung -->
		<div class="row product-List">
			<div class="col-md-3 item-product">
				<figure class="product">
					<div class="image">
						<img src="{!! url('public/images/Aokhoac_1D.png') !!}" class="clickDetail">
						<a href="#" class="add-to-cart">Add to Cart</a>
					</div>
					<figcaption class="clickDetail">
						<h2>Denim Shirt</h2>
						<div class="price">$65.00 </div>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-3 item-product">
				<figure class="product">
					<div class="image">
						<img src="{!! url('public/images/Aokhoac_1D.png') !!}" class="clickDetail">
						<a href="#" class="add-to-cart">Add to Cart</a>
					</div>
					<figcaption class="clickDetail">
						<h2>Denim Shirt</h2>
						<div class="price">$65.00 </div>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-3 item-product">
				<figure class="product">
					<div class="image">
						<img src="{!! url('public/images/Aokhoac_1D.png') !!}" class="clickDetail">
						<a href="#" class="add-to-cart">Add to Cart</a>
					</div>
					<figcaption class="clickDetail">
						<h2>Denim Shirt</h2>
						<div class="price">$65.00 </div>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-3 item-product">
				<figure class="product">
					<div class="image">
						<img src="{!! url('public/images/Aokhoac_1D.png') !!}" class="clickDetail">
						<a href="#" class="add-to-cart">Add to Cart</a>
					</div>
					<figcaption class="clickDetail">
						<h2>Denim Shirt</h2>
						<div class="price">$65.00 </div>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-3 item-product">
				<figure class="product">
					<div class="image">
						<img src="{!! url('public/images/Aokhoac_1D.png') !!}" class="clickDetail">
						<a href="#" class="add-to-cart">Add to Cart</a>
					</div>
					<figcaption class="clickDetail">
						<h2>Denim Shirt</h2>
						<div class="price">$65.00 </div>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
	@show
	<!-- end product -->
	<!-- end content body -->
	<!-- Email -->
</div>
@stop
@section('script')
@parent
<script type="text/javascript" src="{!! url('public/js/Home/product.js') !!}"></script>
@stop
