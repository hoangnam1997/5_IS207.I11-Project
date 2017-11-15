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



