<link rel="stylesheet" type="text/css" href="<?php echo url('public/css/Account/Login.css'); ?>">
<!-- start login -->
<ul class="nav nav-tabs">
	<li ><a data-toggle="tab" href="#Dangnhap">Đăng nhập</a></li>
	<li ><a data-toggle="tab" href="#Dangki">Đăng kí</a></li>
</ul>
<div class="tab-content">
	<div id="Dangnhap" class="tab-pane fade in active">
		<form class="frmLogin">
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Nhập email hoặc tài khoản đăng nhập">
			</div>
			<div class="form-group">
				<label for="pwd">Mật khẩu:</label>
				<input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu">
			</div>
			<div class="checkbox">
				<a href="<?php echo url('/remember/find'); ?>" class="RememberPass">Quên mật khẩu</a>
			</div>
			<button id="btnLogin" type="button" class="btn btn-info">Đăng nhập</button>
		</form>
	</div>
	<div id="Dangki" class="tab-pane fade">
		<form class="frmLogin">
			<div class="form-group">
				<label for="TenDangNhap">Tên đăng nhập:</label>
				<input type="text" class="form-control" id="usernameRegis" placeholder="Nhập tên đăng nhập">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="emailRegis" placeholder="Nhập email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwdRegis" placeholder="nhập mật khẩu">
			</div>  
			<div class="form-group">
				<label for="Repeat_pwd">Nhập lại mật khẩu:</label>
				<input type="password" class="form-control" id="Repeat_pwdRegis" placeholder="nhập lại mật khẩu">
			</div>                  
			<button id="btnRegistration" type="button" class="btn btn-info">Đăng kí</button>
		</form>
	</div>
</div>
<!-- end log in -->
<script type="text/javascript" src="<?php echo url('public/js/Account/Login.js'); ?>"></script>
