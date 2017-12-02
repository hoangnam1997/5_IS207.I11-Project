// create by namnh-UIT
// request email
// fa fa-exclamation fa-2x
// fa fa-check fa-2x
// kiểm tra độ dài mật khẩu
function checkpass($password){
	if($($password).val()=='' || $($password).val().length < 8){
		$mess= '<label class="messRegis" style="color:red;">Mật khẩu phải lớn hơn 8 kí tự</label>';
		$($password).after($mess);
		return false;
	}
	return true;
}
// kiểm tra trùng pass
function checkrePass($password,$rePasswork){
	if($($password).val() != $($rePasswork).val()){
		$mess= '<label class="messRegis" style="color:red;">Mật khẩu không trùng nhau</label>';
		$($rePasswork).after($mess);
		return false;
	}
	return true;
}
// kiểm tra email
function checkOldPass($pass,$result){
	// thực kiểm tra tồn tại
	var _token = $('meta[name="_token"]').attr('content');
	$urlNew = url + '/account/checkpassold';
	$.ajax({
		type: 'POST',
		url: $urlNew,
		data: {'_token':_token,'passOld': $pass},
	})
	.done(function($re) {
		if($re =='1'){
			return $result(true);
		}else{
			return $result(false);
		}
	})
	.fail(function(){
		return $result(false);
	});

}
//  function check pass word old
$('#txtOldPass').focusout(function(){
	$('#txtOldPass ~ .messRegis').remove();
	checkOldPass($('#txtOldPass').val(),function($re){
		$('#txtOldPass ~ .messRegis').remove();
		if(!$re){
			$mess= '<label class="messRegis" style="color:red;">Mật khẩu không đúng</label>';
			$('#txtOldPass').after($mess);
			return false;
		}
	});
});
$('#txtPass').focusout(function(){
	$('#txtPass ~ .messRegis').remove();
	$('#txtRePass ~ .messRegis').remove();
	if(!checkpass(this)){
		return;
	}
	checkrePass(this,$('#txtRePass'));
});
$('#txtRePass').focusout(function(){
	$('#txtRePass ~ .messRegis').remove();
	checkrePass($('#txtPass'),this);
});
// hiển thị change pass
$('#ckbChangePass').on('change',function(){
	if($(this).is(':checked')){
		$('#Password-content').toggle(300);
	}else{
		$('#Password-content').toggle(300);
	}
});
