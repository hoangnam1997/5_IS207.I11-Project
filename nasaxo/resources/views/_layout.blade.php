<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@section('title') Nasaxo  Shop @show</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{{ csrf_token() }}">
	<!-- font fa -->
	<link rel="stylesheet" type="text/css" href="{!! url('public/css/font-awesome.min.css') !!}">
	@section('link') 
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="{!! url('public/css/bootstrap.css') !!}">
	<!-- css my cústom -->
	<link rel="stylesheet" type="text/css" href="{!! url('public/css/Home/Home.css') !!}">
	@show
	<link href="https://fonts.googleapis.com/css?family=Lato|Libre+Baskerville:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet">
</head>
<body>
	<!-- model -->
	<div class="modal fade in" id="homeModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Thông tin màu sắc</h4>
				</div>
				<div class="modal-body">
					ahihi
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Chấp nhận</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
				</div> -->
			</div>

		</div>
	</div>
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
				<a class="navbar-brand" href="{!! url('/') !!}">Nasaxo Shop</a>
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
					
					<li><a href="{!! url('/cart') !!}" class="glyphicon glyphicon-shopping-cart"></a></li>
					<li><a id="btnLogin" data-toggle="modal" data-target="#homeModal">Sign in</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<!-- end top-header	 -->
	<!-- content-body -->
	<div class="content-body">
		<div class="content-product">
			@yield('content')
		</div>
		<!-- end product -->
	</div>
	<!-- end content body -->
	<!-- btn back to top -->
	<a href="#" id="scroll" title="Scroll to top" style="display:none;"><span></span></a>
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
					<span class="input-group-addon" id="btnSendMail">
						<i class="fa fa-search"></i>
					</span>
				</form>

			</div>
		</div>
	</footer>
	@section('script')
	<!-- end email -->
	<script type="text/javascript" src="{!! url('public/js/jquery.min.js') !!}"></script>
	<!-- bút tráp  -->
	<script type="text/javascript" src="{!! url('public/js/bootstrap.min.js') !!}"></script>
	<!-- easing -->
	<script type="text/javascript" src="{!! url('public/js/Home/jquery.easing.1.3.js') !!}"></script>
	<script type="text/javascript">
		var url="{!! url('') !!}";
	</script>
	<script type="text/javascript" src="{!! url('public/js/Home/index.js') !!}"></script>
	@show
</body>
</html>