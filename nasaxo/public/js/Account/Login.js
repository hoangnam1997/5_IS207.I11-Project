// function login
function Login($email,$passWord){
	var _token = $('meta[name="_token"]').attr('content');
	$.ajax({
		type: 'post',
		url: url + '/login/acept',
		cache: false,
		data: {'_token': _token,'email':$email,'password':$passWord},
	})
	.done(function($re) {
		if($re==1){
			$('#accountHome').html($re);
			$('.modal .close').click();
			$('.modal .modal-dialog .modal-body').html('');
		}else{

		}
	})
	.fail(function() {
		return false;
	});
}
function Registration($regAccount){
	return true;
}
// thực hiện login
$('#btnLogin').on('click',function(){
	Login($('#email').val(),$('#pwd').val());
});
