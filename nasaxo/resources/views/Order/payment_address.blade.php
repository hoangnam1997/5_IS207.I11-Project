@extends('Order.index')
@section('link')
@parent
<link rel="stylesheet" type="text/css" href="{!! url('public/css/Order/payment_address.css') !!}">
@stop
@section('content-order')
<div class="container">
	<div class="row">
		<div class="col-md-7 col-md-push-2">
			<div  class="address">
				<form action="{!! url('cart/invoice') !!}" enctype="multipart/form-data" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="Name">Họ tên</label>
						<input type="text" class="form-control" id="Name" placeholder="Nhập họ tên">
					</div>
					<div class="form-group">
						<label for="SDT">SĐT</label>
						<input type="email" class="form-control" id="SĐT" placeholder="Nhập SĐT">
					</div>
					<div class="form-group">
						<label for="Tinh">Tỉnh/Thành phố</label>
						<input type="password" class="form-control" id="Tinh" placeholder="nhập tên tỉnh/thành phố">
					</div>  
					<div class="form-group">
						<label for="Quan">Quận huyện/phường xã</label>
						<input type="password" class="form-control" id="Quan" placeholder="Nhập tên quận huyện hoặc phường xã
						">
					</div>  
					<div class="form-group">
						<label for="DiaChi">Địa chỉ</label>
						<input type="password" class="form-control" id="Quan" placeholder="Nhập địa chỉ
						">
					</div>   
					<button id="btnSubmitAddress" type="submit" class="btn btn-info">Cập nhật</button>
					<button id="btnCancle" type="button" class="btn btn-info">Hủy bỏ</button>
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