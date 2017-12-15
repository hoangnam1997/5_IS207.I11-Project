// function onclick change image
$('.input-Img').on('click',function(){
	$(this).parent().find('input[type=file]').click();
});
// function when input file changes
$('input[type=file]').on('change',function(e){
	groupPicture = $(this).parent().find('.groupPicture');
	var files = e.target.files; //FileList object
	$.each(files, function(i, file) {
		var pReader = new FileReader(); 
		pReader.addEventListener("load", function(ePicture){
			var pic = ePicture.target;  // 1 file              
			groupPicture.append('<div class="item-picture"><img class="img-product-edit" src="' + pic.result + '"/><span title="Bỏ hình ảnh" class="removeImg"><i class="fa fa-window-close-o" aria-hidden="true"></i></span></div>');
			RemovePictureEvent(groupPicture);
		});
		if(file['type'].split('/')[0]=='image'){
			pReader.readAsDataURL(file);
		}
	});
	$(this).val('');
});
// remove picture
function RemovePictureEvent(elemtne){
	$(elemtne).find('.removeImg').on('click',function(){
		$(this).parent().remove();
	});
}

// function ajax get view for admin
$('#btnSearch').on('click',function(){
	var _token = $('meta[name="_token"]').attr('content');
	$valueSearch = $('#inputSearch').val();
	// tạo ra đường dẫn route
	urlNew = url + '/admin/product/search';
	// thực hiện lấy view về
	$.ajax({
		type:"POST",
		url: urlNew,
		cache:false,
		data:{'_token':_token,'valueSearch':$valueSearch},
		success:function($re){
			$('#contentBodySearch').html($re);
		}
	});
});
$("#inputSearch").keyup(function(event)
{
	var code = event.keyCode || event.which;
	if (code === 13)
	{
		$('#btnSearch').click();
	}
});
