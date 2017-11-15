<?php
// home
Route::get('/', 'HomeController@Index');
// Cart
Route::get('cart','CartController@Index');
// Login
Route::get('login','LoginController@Index');
// Remember password
Route::group(['prefix'=>'remember'],function(){
	Route::get('find','RememberController@Index');
	Route::post('type','RememberController@Type');
	Route::post('changepass','RememberController@ChangePass');

});



