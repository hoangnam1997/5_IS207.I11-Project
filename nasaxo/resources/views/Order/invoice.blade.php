@extends('Order.index')
@section('link')
@parent
<link rel="stylesheet" type="text/css" href="{!! url('public/css/Order/invoice.css') !!}">
@stop
@section('content-order')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="paymentmethod">
				<h3>Hình thức thanh toán</h3>
				<div class="choices_payment">
					<form>
						<div class="checkbox">
							<label><input type="checkbox" value="">Thanh toán tiền mặt khi nhận hàng</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Chuyển khoản qua ngân hàng</label>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="time">
				<h3>Thời gian giao hàng dự kiến</h3>
				<span class= "fa fa-bicycle">  Giao hàng tiêu chuẩn dự kiến vào thứ 6 ngày 13</span>
			</div>
		</div>
	</div>
</div> <!-- end container -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="DonHang">
				<form class=" col-md-12 header" action="{!! url('cart') !!}" method="get">
					<h3 class="donhang">Đơn hàng</h3> 
					<button type="submit" class= "btn btn-default pull-right">Sửa </button>
					<hr class="hr">
				</form>
				<div class="col-md-12 content">						
					<div class="col-md-12 product">
						<p class= "col-md-6">1 * áo Sida</p>
						<span class="col-md-6 col-md-push-2">750.000 đ</span>
					</div>
					<div class="col-md-12 product">
						<p class= "col-md-6">1 * áo Sida</p>
						<span class="col-md-6 col-md-push-2">750.000 đ</span>
					</div>

					<hr class="hr">							
				</div>

				<div class= "col-md-12 prices">
					<div class="col-md-12 Tamtinh">
						<p class="col-md-6">Tạm tính:</p>
						<span class="col-md-6 col-md-push-2"">1.300.000</span>
					</div>
					<div class= "col-md-12 PhiVanChuye">
						<p class="col-md-6">Phí vận chuyện:</p>
						<span class="col-md-6 col-md-push-2">20.000 đ</span>
					</div>
					<hr class="hr">
				</div>

				<div class="col-md-12 TongTien">
					<h3 class="col-md-6">Tổng tiền:</h3>
					<span class="col-md-6 col-md-push-2"><h3>1.320.000 đ</h3></span>
				</div>

			</div>	<!-- end don hang -->				

		</div>


		<div class="col-md-6">
			<form class="address-invoice" action="{!! url('cart/order') !!}" method="post">
				{{ csrf_field() }}
				<h3>Địa chỉ giao hàng</h3>
				<button type="submit" class= "btn btn-default pull-right">Sửa </button>
				<hr>
				<div class=content>
					<b>Đại ca hống hách là tên ta</b>	<br>
					<p>
						Xóm nhà lá, huyện nhà bè, tỉnh nhà chuột <br>	
						SĐT:6677 3508
					</p>	
				</div>						
			</form>
		</div>
		<form action="{!! url('/') !!}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<button id="btnBuy" class = "btn btn-danger"> Đặt mua</button>
		</form>

	</div>

</div><!--  end container -->
@stop
@section('script')
@parent
<script type="text/javascript" src="{!! url('public/js/Order/invoice.js') !!}"></script>
@stop
