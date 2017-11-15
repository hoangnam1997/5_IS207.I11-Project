// create by namnh-UIT
// request email
// fa fa-exclamation fa-2x
// fa fa-check fa-2x
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
};
function SetTrueFalse($true,$elementSet,$i){
	if($true >0){
		$($elementSet).removeClass('input-false');
		$($i).attr({'class':'check-done fa fa-check fa-2x'});
	}else{
		$($elementSet).addClass('input-false');
		$($i).attr({'class':'check-false fa fa-exclamation fa-2x'});
	}
	$($i).css('display', 'inline-block');
}
$(document).ready(function(){
	// function check email
	$('#txtEmail').focusout(function(){
		if(isValidEmailAddress($(this).val())){
			SetTrueFalse(1,$('#txtEmail'),$('#checkEmail'));
		}else{
			SetTrueFalse(0,$('#txtEmail'),$('#checkEmail'));
		}
	});
	// function check name
	$('#txtName').focusout(function(){
		if(1){
			SetTrueFalse(1,$('#txtName'),$('#checkName'));
		}else{
			SetTrueFalse(0,$('#txtName'),$('#checkName'));
		}
	});
	//  function check pass word old
	$('#txtOldPass').focusout(function(){
		if(1){
			SetTrueFalse(1,$('#txtOldPass'),$('#checkOldPass'));
		}else{
			SetTrueFalse(0,$('#txtOldPass'),$('#checkOldPass'));
		}
	});
	$('#txtPass').focusout(function(){
		if(1){
			SetTrueFalse(1,$('#txtPass'),$('#checkPass'));
		}else{
			SetTrueFalse(0,$('#txtPass'),$('#checkPass'));
		}
	});
	$('#txtRePass').focusout(function(){
		if(1){
			SetTrueFalse(1,$('#txtRePass'),$('#checkRePass'));
		}else{
			SetTrueFalse(0,$('#txtRePass'),$('#checkRePass'));
		}
	});
	$('#ckbChangePass').on('change',function(){
		if($(this).is(':checked')){
			$('#Password-content').toggle(300);
		}else{
			$('#Password-content').toggle(300);
		}
	});
});