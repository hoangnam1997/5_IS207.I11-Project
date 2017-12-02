<?php if(isset($user)){ ?>
<!-- tên đăng nhập -->
<div class="group-content">
	<span  class="field-lable">Tên đăng nhập: </span>
	<input id="txtUserName" disabled class="field-input" type="text" name="userName" value="<?php echo $user->Username; ?>">
</div>
<!-- end tên đăng nhập -->
<!-- email -->
<div class="group-content">
	<span class="field-lable">Email: </span>
	<input class="field-input" disabled type="text" name="txtEmail" id="txtEmail" value="<?php echo $user->Email; ?>">
</div>
<!-- ./email -->
<!-- start description -->
<div class="group-content">
	<span class="field-lable">Mô tả về bản thân:  </span>
	<textarea class="field-input" type="text" name="txtDescription" id="txtDescription"><?php echo $user->Description; ?></textarea>
</div>
<!-- end description -->
<div class="group-content">
	<label class="ckb-ChangePass">
		<input type="checkbox" name="ckbChangePass" id="ckbChangePass">
		Thay đổi mật khẩu
	</label>
</div>
<!-- start password -->
<div id="Password-content" class="password-content" style="display: none;">
	<div class="group-content">
		<span class="field-lable">Mật khẩu củ: </span>
		<input class="field-input" type="password" name="txtOldPass" id="txtOldPass" placeholder="Nhập mật khẩu củ" value="">
		<i id="checkOldPass" style="display: none;" aria-hidden="true"></i>
	</div>
	<div class="group-content">
		<span class="field-lable">Mật khẩu mới: </span>
		<input class="field-input" type="password" name="txtOldPass" id="txtPass" placeholder="Nhập mật khẩu từ 8 đến 32 ký tự" value="">
		<i id="checkPass" style="display: none;" aria-hidden="true"></i>
	</div>
	<div class="group-content">
		<span class="field-lable">Nhập lại: </span>
		<input class="field-input" type="password" name="txtOldPass" id="txtRePass" placeholder="Nhập lại mật khẩu mới" value="">
		<i id="checkRePass" style="display: none;" aria-hidden="true"></i>
	</div>
</div>
<!-- end password -->
<div class="password-content">
	<input class="btn-update btn btn-success" type="button" name="btnUpdate" id="btnUpdate" value="Cập nhật">
</div>
<script type="text/javascript" src="{!! url('public/js/Account/InfomationAccount.js') !!}"></script>
<?php } ?>
<!-- end content -->
<!-- end container -->
<!-- custom js -->
