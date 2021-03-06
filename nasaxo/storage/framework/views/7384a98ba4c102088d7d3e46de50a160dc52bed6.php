<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php $__env->startSection('title'); ?> Nasaxo  Shop <?php echo $__env->yieldSection(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- font fa -->
	<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/font-awesome.min.css'); ?>">
	<?php $__env->startSection('link'); ?> 
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/bootstrap.css'); ?>">
	<!-- css my cústom -->
	<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/Home/Home.css'); ?>">
	<?php echo $__env->yieldSection(); ?>
	<link href="https://fonts.googleapis.com/css?family=Lato|Libre+Baskerville:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet">
</head>
<body>
	<!-- top-header -->			
	<nav id="header-nav" class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo url('/'); ?>">Nasaxo Shop</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<div class="input-group divSearch">
							<input type="text" id='txtSearch' class="form-control" name="txtSearch" placeholder="Search...">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-search btnSearch"></i>
							</span>
						</div>
					</li>
					<li><a href="#">Best seller</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
						<ul id="dropdownMenu" class="dropdown-menu">
							<li><a href="#">T-shirt</a></li>
							<li><a href="#">Shirt</a></li>
							<li><a href="#">coat</a></li>
							<li><a href="#">Trousers</a></li>
							<li><a href="#">sports clothing</a></li>
							<li><a href="#">vest/blazer coat</a></li>
						</ul>
					</li>
					
					<li><a href="<?php echo url('/cart'); ?>" class="glyphicon glyphicon-shopping-cart"></a></li>
					<li><a href="#">Sign in</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<!-- end top-header	 -->
	<?php $__env->startSection('content'); ?>
	<!-- content-body -->
	<div class="content-body">
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
		<!--  product -->
		<div class="content-product">
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
								<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>">
								<a href="#" class="add-to-cart">Add to Cart</a>
							</div>
							<figcaption>
								<h2>Denim Shirt</h2>
								<div class="price">$65.00 </div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-3 item-product">
						<figure class="product">
							<div class="image">
								<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>">
								<a href="#" class="add-to-cart">Add to Cart</a>
							</div>
							<figcaption>
								<h2>Denim Shirt</h2>
								<div class="price">$65.00 </div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-3 item-product">
						<figure class="product">
							<div class="image">
								<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>">
								<a href="#" class="add-to-cart">Add to Cart</a>
							</div>
							<figcaption>
								<h2>Denim Shirt</h2>
								<div class="price">$65.00 </div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-3 item-product">
						<figure class="product">
							<div class="image">
								<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>">
								<a href="#" class="add-to-cart">Add to Cart</a>
							</div>
							<figcaption>
								<h2>Denim Shirt</h2>
								<div class="price">$65.00 </div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-3 item-product">
						<figure class="product">
							<div class="image">
								<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>">
								<a href="#" class="add-to-cart">Add to Cart</a>
							</div>
							<figcaption>
								<h2>Denim Shirt</h2>
								<div class="price">$65.00 </div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-3 item-product">
						<figure class="product">
							<div class="image">
								<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>">
								<a href="#" class="add-to-cart">Add to Cart</a>
							</div>
							<figcaption>
								<h2>Denim Shirt</h2>
								<div class="price">$65.00 </div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-3 item-product">
						<figure class="product">
							<div class="image">
								<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>">
								<a href="#" class="add-to-cart">Add to Cart</a>
							</div>
							<figcaption>
								<h2>Denim Shirt</h2>
								<div class="price">$65.00 </div>
							</figcaption>
						</figure>
					</div>
					<div class="col-md-3 item-product">
						<figure class="product">
							<div class="image">
								<img src="<?php echo url('public/images/Aokhoac_1D.png'); ?>">
								<a href="#" class="add-to-cart">Add to Cart</a>
							</div>
							<figcaption>
								<h2>Denim Shirt</h2>
								<div class="price">$65.00 </div>
							</figcaption>
						</figure>
					</div>

				</div>
			</div>   

		</div>
		<!-- end product -->
		<?php echo $__env->yieldSection(); ?>

	</div>
	<!-- end content body -->
	<!-- btn back to top -->
	<a href="#" id="scroll" title="Scroll to top"><span></span></a>
	<!-- end back to top -->
	<!-- Email -->
	<footer class="container footer">
		<div class="row">
			<!-- address -->
			<div class="col-md-6 address">

				<span><b>Address:</b>  KTX-khu B ĐHQG TP HCM</span><br>
				<span><b>Phone:</b> 0952 432 685</span><br>
				<span><b>Email:</b> mail@gmail.com</span><br>
				<span><b>Working days/hours:</b> Mon-Sun/9:00AM-8:00PM</span><br>
			</div>
			<!-- email -->
			<div class="col-md-4 col-md-push-2 input ">
				<span><b>NEWSLETTER</b></span><br>
				<p class="nomargin">Type your best E-mail Address</p>

				<form method="get" action="#" class="input-group">
					<input type="text" class="form-control" name="s" id="s" value="" placeholder="E-mail Address">
					<span class="input-group-btn">
						<button class="btn btn-danger"><i class="fa fa-search"></i></button>
					</span>
				</form>

			</div>
		</div>
	</footer>
	<!-- end email -->
	<script type="text/javascript" src="<?php echo url('public/js/jquery.min.js'); ?>"></script>
	<!-- bút tráp  -->
	<script type="text/javascript" src="<?php echo url('public/js/bootstrap.min.js'); ?>"></script>
	<!-- easing -->
	<script type="text/javascript" src="<?php echo url('public/js/Home/jquery.easing.1.3.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo url('public/js/Home/index.js'); ?>"></script>

</body>
</html>