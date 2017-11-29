@extends('Order.index')
@section('link')
@parent
<link rel="stylesheet" type="text/css" href="{!! url('public/css/Order/payment_address.css') !!}">
@stop
@section('content-order')
<?php if(isset($deliveryPlace)) print_r($deliveryPlace[0]->DeliveryPlaces); ?>
<div class="container">
	<div class="row">
		<div class="col-md-7 col-md-push-2">
			<div  class="address">
				<form action="{!! url('cart/invoice') !!}" enctype="multipart/form-data" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="Name">Họ tên người nhận</label>
						<input type="text" class="form-control" id="Name" name="name" placeholder="Nhập họ tên" required>
					</div>
					<div class="form-group">
						<label for="SDT">Số điện thoại</label>
						<input type="text" class="form-control" id="SĐT" name="phone" placeholder="Nhập SĐT" required>
					</div>
					<div class="form-group">
						<label for="Tinh">Tỉnh/Thành phố</label>
						<input type="text" class="hidden" id="cityControl" name="city" required>
						<input type="text" class="form-control" id="city" placeholder="nhập tên tỉnh/thành phố">
					</div>  
					<div class="form-group">
						<label for="Quan">Quận huyện/phường xã</label>
						<input type="text" class="hidden" id="districtControl" name="district" required>
						<input type="text" class="form-control" id="district" placeholder="Nhập tên quận huyện hoặc phường xã
						">
					</div>  
					<div class="form-group">
						<label for="ward">Khu vực</label>
						<input type="text" class="hidden" id="wardControl" name="ward" required>
						<input type="text" class="form-control" id="ward" placeholder="Nhập địa chỉ
						">
					</div>   
					<div class="form-group">
						<label for="DiaChi">Địa chỉ</label>
						<input type="text" class="form-control" id="DiaChi" name="deveryPlace" placeholder="Nhập địa chỉ
						" required>
					</div>   
					<button id="btnSubmitAddress" type="submit" class="btn btn-info pull-right">Tiếp tục</button>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
@section('script')
@parent
<script type="text/javascript" src="{!! url('public/js/Order/payment_address.js') !!}"></script>
@stop