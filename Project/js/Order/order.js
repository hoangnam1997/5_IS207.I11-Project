//function when loaded
// include header
function LoadHeader(){
	$.get('../../view/Order/Header.html',function(data){
		$('#header').html(data);
	});
}
// include content login
function LoadLoginContent(){
	$.get('../../view/AccountInfomation/Login.html',function(data){
		$('#content').html(data);
		// Login click function
		$('#btnLogin').on('click',function(){
			if(Login('1','2')){
				LoadPayAddressContent();
			}else{
				alert("fail nè");
			}
		});
		// Registraion click function
		$("#btnRegistration").on('click',function(){
			if(Registration(1)){
				LoadPayAddressContent();
			}else{
				alert("fail nè");
			}
		});
	});
}
// load payment address to content
function LoadPayAddressContent(){
	$.get('../../view/Order/payment_address.html',function(data){
		$('#content').html(data);
		$('#btnCancle').on('click',function(){
			window.location='../../view/Cart/index.html';
		});
		// accept  address
		$("#btnSubmitAddress").on('click',function(){
			if(submitAddress()){
				LoadInvoiceContent();
			}
		});
	});
}
// load Invoice to content
function LoadInvoiceContent(){
	$.get('../../view/Order/invoice.html',function(data){
		$('#content').html(data);
		$("#btnBuy").on('click',function(){
			BuyProduct();
		});
	});
}
// load function to 
// load page
function LoadPage(){
	LoadHeader();
	LoadLoginContent();
}
//function when loaded header and content
LoadPage();


