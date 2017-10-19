// create by namnh
// load content find account of customer
function LoadFindAccountContent(){
	$.get("../../view/Account/RememberFindAccount.html",function($data){
		$("#content").html($data);
		$('#btnSuccess').on('click',function(){
			LoadTypeContent();
		});
		$('#btnCancel').on('click',function(){
			alert('Cancel')
		})
	});
}
// laod content input code
function LoadTypeContent(){
	$.get("../../view/Account/RememberType.html",function($data){
		$("#content").html($data);
		$('#btnSuccess').on('click',function(){
			LoadChangePass();
		});
		$('#btnCancel').on('click',function(){
			alert('Cancel')
		})
	});
}
// laod content change pass
function LoadChangePass(){
	$.get("../../view/Account/RememberChangePass.html",function($data){
		$("#content").html($data);
		$('#btnSuccess').on('click',function(){
			alert('Success')
		});
		$('#btnCancel').on('click',function(){
			alert('Cancel')
		})
	});
}
// function when load page
LoadFindAccountContent();