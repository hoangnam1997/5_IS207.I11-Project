<?php
// home
Route::get('/', 'HomeController@Index');
// Cart
Route::get('cart','CartController@Index');
// Login
Route::get('login','LoginController@Index');
// product
Route::get('product','ProductController@Get');
// Remember password
Route::group(['prefix'=>'remember'],function(){
	// tìm kiếm tài khoản
	Route::get('find','RememberController@Index');
	// nhập mã
	Route::post('type','RememberController@Type');
	//  đổi mật khẩu
	Route::post('changepass','RememberController@ChangePass');
});
// Thông tin tài khoản
Route::group(['prefix'=>'account'],function(){
	Route::get('/','AccountController@Index');
	Route::post('infomation','AccountController@Info');
	Route::post('mess','AccountController@Mess');
});
// admin route
Route::group(['prefix'=>'admin'],function(){
	// trang đầu
	Route::get('/','ManageHomeController@Index');
	// login
	Route::post('/login','ManageHomeController@Login');
	// group for address
	Route::group(['prefix'=>'address'],function(){
		// lấy ra view quận hyện
		Route::post('district','ManageAddressController@GetDistrictView');
		// lấy view thành phố
		Route::post('city','ManageAddressController@GetCityView');
		// lấy view thành phó
		Route::post('ward','ManageAddressController@GetWardView');
	});
	// group khuyến mãi
	Route::group(['prefix'=>'promotion'],function(){
		// lấy view khuyến mãi
		Route::post('/','ManagePromotionController@GetPromotion');
	});
});


