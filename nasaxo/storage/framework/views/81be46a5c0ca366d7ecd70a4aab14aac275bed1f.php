<!-- content-body -->
<?php $__env->startSection('content'); ?>
<div class="content-body">
	<?php $__env->startSection('discount'); ?>
	<!-- discount -->
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img  src="<?php echo url('public/images/carouse_3.jpg'); ?>" class="img-responsive">
			</div>
			<div class="item">
				<img  src="<?php echo url('public/images/carousel_3.jpg'); ?>" class="img-responsive">
			</div>
			<div class="item">
				<img  src="<?php echo url('public/images/carouse_2.jpg'); ?>" class="img-responsive">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>	
	<!-- 	end discount -->
	<?php echo $__env->yieldSection(); ?>
	<!--  product -->
	<?php $__env->startSection('product'); ?>
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
						<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>" class="clickDetail">
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
						<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>" class="clickDetail">
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
						<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>" class="clickDetail">
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
						<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>" class="clickDetail">
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
						<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>" class="clickDetail">
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
	<?php echo $__env->yieldSection(); ?>
	<!-- end product -->
	<!-- end content body -->
	<!-- Email -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
<script type="text/javascript" src="<?php echo url('public/js/Home/product.js'); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>