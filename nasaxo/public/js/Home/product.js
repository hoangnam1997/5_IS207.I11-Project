
// thực hiện thêm 
$('.add-to-cart').off('click').on('click',function(){
	$idProduct = $(this).data('id');
	$nameProduct = $(this).data('name');
	CheckLogin(function($result){
		if($result){
			var _token = $('meta[name="_token"]').attr('content');
			// alert($idProduct);
			$.ajax({
				type: 'POST',
				url: url + '/cart/add',
				data: {'_token': _token, 'productId':$idProduct},
			})
			.done(function($re) {//nêu thành công
				if($re =='0'){ 
					$.notify('Xảy ra lỗi!',{
						globalPosition: 'bootom left',
						className: 'error',
					});
					return;
				}
				// hiển thị thông báo cho người dùng
				$.notify($nameProduct,{
					globalPosition: 'bootom left',
					className: 'success',
				});
			})
			.fail(function() {
				console.log("error add to cart");
			});
			
		}
		else{
			alert('Vui lòng đăng nhập!');
		}
	});
});