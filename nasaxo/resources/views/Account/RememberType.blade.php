@extends('Account.Remember')
@section('content')
<!-- start Type account -->
<form action="{!! url('/remember/changepass') !!}" name="frmFind" method="POST">
	{{csrf_field()}}	
	<div class="rememver-content">
		<div class="infomation-content">
			<h4>Nhập mã xác nhận</h4>
			<div class="find-content">
				<span class="Remember-email">Vui lòng nhập mã xác nhận</span>
				<input class="txtInputRemember" type="text" name="txtEmail" id="txtEmail" placeholder="Nhập mã">
				<span class="Remember-email">Chúng tôi đã gửi mã xác nhận về <span class="email">15520xxx@gm.uit.edu.vn</span> <span class="reSend">Gửi lại</span></span>
			</div>
			<div class="footer-remember">
				<button class="footerBtn btn-success" type="submit" name="btnSuccess" id="btnSuccess">Tiếp tục</button>
				<button class="footerBtn btn-cancel" type="button" name="btnCancel" id="btnCancel">Hủy</button>
			</div>
		</div>
	</div>
</form>
<!-- end Type account -->
@stop
@section('script')
@parent

@stop

