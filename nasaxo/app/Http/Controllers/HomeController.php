<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// khai báo product model
use App\Product as Product;
use App\ProductCategory as ProductCategory;
class HomeController extends Controller
{
	// số record products hiển thị mật định
	static protected $_numberRecord = 12;
	// default home
	public function Index(){
    	// lấy dánh sách
		$discount=null;
		// category 
		$listCategory = ProductCategory::all();
		// view discounts
		$dataViewDiscount = view('Home._PromotionLayout',['discounts'=>$discount]);
		// view products
		$dataViewProducts = HomeController::GetViewProducts();
		return view('Home.Home',['categorys'=>$listCategory,'products'=>$dataViewProducts,'discounts'=>$dataViewDiscount]);
	}
	//  lấy danh sách products hiển thi lên views
	public function GetViewProducts(){
		// các tham số truyền vào
		// required
		$arrRequired=array();
		//  trang thứ
		$pageList = isset($_POST['pageList']) ? $_POST['pageList'] : 0;
		// Số lượng hiển thị
		$numberRecord = isset($_POST['numberRecord']) ? $_POST['numberRecord'] : HomeController::$_numberRecord;
		// nhóm sản phẩm
		$productCategory = isset($_POST['productCategory']) ? $_POST['productCategory'] : null;
		// add category to reqired
		if($productCategory!=null){
			array_push($arrRequired,array( 'ID_ProductCategory','=',$productCategory));
		}
		// tên sản phẩm
		$nameProduct = isset($_POST['nameProduct']) ? $_POST['nameProduct'] : '';
		// add name to reqired
		array_push($arrRequired,array( 'Name','LIKE','%'.$nameProduct .'%' ));
		// hiển thị nút xem nhiều
		$seeMore = true;
		//  lấy danh sách product
		$products = HomeController::GetProduct($pageList*$numberRecord,$numberRecord,$arrRequired);
		// tính toán có remove nút seemore không?
		if(($pageList+1)*$numberRecord >=count(Product::where($arrRequired)->get())){
			$seeMore = false;
		}
		// trả về danh sách product
		return view('Home._ProductsLayout',['products'=>$products,'seeMore'=>$seeMore]);
	}
    // lấy danh sách product theo yêu cầu
	public function GetProduct($skip=0,$take=12,$where=[]){
    	// set default
		$skip=$skip == null ? 0: $skip;
		$where=$where==null? [] : $where;
    	// return product items
		return $take == null ? Product::where($where)->skip($skip)->get() : Product::where($where)->skip($skip)->take($take)->get();
	}
}
