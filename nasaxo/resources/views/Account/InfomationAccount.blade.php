<!-- tên đăng nhập -->
<div class="group-content">
	<span  class="field-lable">Tên đăng nhập: </span>
	<input id="txtUserName" disabled class="field-input" type="text" name="userName" value="namnh">
</div>
<!-- end tên đăng nhập -->
<!-- họ tên -->
<div class="group-content">
	<span  class="field-lable">Họ tên: </span>
	<input id="txtName" class="field-input" type="text" name="txtName" value="Nguyễn Hoàng Nam">
	<i id="checkName" style="display: none;" aria-hidden="true"></i>
</div>
<!-- end họ tên -->
<div class="group-content">
	<span class="field-lable">Email: </span>
	<input class="field-input" type="text" name="txtEmail" id="txtEmail" value="15520515@gm.uit.edu.vn">
	<i id="checkEmail" style="display: none;" aria-hidden="true"></i>
</div>
<!-- start description -->
<div class="group-content">
	<span class="field-lable">Mô tả về bản thân:  </span>
	<textarea class="field-input" type="text" name="txtDescription" id="txtDescription">Đây là mô tả cá nhân.</textarea>
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
	<input class="btn-update" type="button" name="btnUpdate" id="btnUpdate" value="Cập nhật">
</div>
<!-- end content -->
<!-- end container -->
<!-- custom js -->
<script type="text/javascript" src="{!! url('public/js/Account/InfomationAccount.js') !!}"></script>
