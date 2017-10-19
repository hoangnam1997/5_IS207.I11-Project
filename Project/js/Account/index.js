// create by namnh
// function load infomation to div content
function LoadInfomationAccount(){
	$.get("../../view/Account/InfomationAccount.html",function($data){
		$('#infomation-content').html($data);
	});
}
function LoadMessageAccount(){
	$.get("../../view/Account/MessageAccount.html",function($data){
		$('#infomation-content').html($data);
	});
}
function onClick($element){
	var id = $($element).attr('id');
	switch(id){
		case "h4Infomation":LoadInfomationAccount();
		break;
		case "h4Mesage":LoadMessageAccount();
		break;
		default:
		LoadInfomationAccount();
	}
}
// set onclick header of info
$('.infomation-account h4').on('click',function(){
	$(".infomation-account h4").css({'border-bottom': '2px dashed #f4f4f4'});
	$(this).css({'border-bottom': '3px solid #fff'});
	onClick(this);
});
// function when load new page
$('#h4Infomation').click();
