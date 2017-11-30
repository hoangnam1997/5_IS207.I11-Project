<?php
// check login
Route::any('/checklogin','HomeController@CheckLogin');

// home
Route::any('/',array('as' => 'home', 'uses' => 'HomeController@Index'));

// lay them danh sach products
Route::post('GetViewProducts', 'HomeController@GetViewProducts');
// Cart
Route::group(['prefix'=>'cart'],function(){
	// thêm sản phẩm vào cart
	Route::post('add','CartController@Add');
	// home cart
	Route::get('/','CartController@Index');
	// address
	Route::post('order','CartController@Order');
	// thanh toán
	Route::post('invoice','CartController@Invoice');
	// delete item
	Route::post('delete','CartController@Delete');
	// create order
	Route::post('createorder','CartController@CreateOrder');
});

// Login
Route::group(['prefix'=>'login'],function(){
	Route::get('/','LoginController@Index');
	Route::post('acept','LoginController@Check');
	Route::post('out','LoginController@Out');
});
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
	Route::post('manage','ManageHomeController@Login');
	// group for address
	Route::group(['prefix'=>'address'],function(){
		// get danh sách city
		Route::any('getallcity','ManageAddressController@GetCitys');
		// get danh sách districts
		Route::any('getdistrictsbycity','ManageAddressController@GetDistrictsByIdCity');
		// get danh sách districts
		Route::any('getwardbydistrict','ManageAddressController@GetWardsByIdDistrict');
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
	// group color
	Route::group(['prefix'=>'color'],function(){
		// lấy view màu sắt
		Route::post('/','ManageColorController@GetColors');
	});
	// group size
	Route::group(['prefix'=>'size'],function(){
		// lấy view màu sắt
		Route::post('/','ManageSizeController@GetSizes');
	});
	// group customer
	Route::group(['prefix'=>'customer'],function(){
		// lấy view màu sắt
		Route::post('/','ManageCustomerController@GetCustomers');
	});
	// group productcategory
	Route::group(['prefix'=>'productcategory'],function(){
		// lấy view màu sắt
		Route::post('/','ManageProductCategoryController@GetProductCategorys');
	});
	// group product
	Route::group(['prefix'=>'product'],function(){
		// lấy view màu sắt
		Route::post('/','ManageProductController@GetProducts');
	});
});

