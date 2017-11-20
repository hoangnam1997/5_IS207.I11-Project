<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// khai báo product model
use App\Product as Product;
class HomeController extends Controller
{
	// default home
	public function Index(){
    	// lấy dánh sách
		$products = HomeController::GetProduct();
		$discount=null;
		$dataViewDiscount = view('Home._PromotionLayout',['discounts'=>$discount]);
		$dataViewProducts = view('Home._ProductsLayout',['products'=>$products]);
		return view('Home.Home',['products'=>$dataViewProducts,'discounts'=>$dataViewDiscount]);
	}
	public function SeeMoreProducts(){
		$pageList = $_POST['pageList'];
		$numberRecord = $_POST['numberRecord'];
		$productCategory = $_POST['productCategory'];
		$nameProduct = $_POST['nameProduct'];
		$seeMore = true;
		$products = HomeController::GetProduct($pageList*$numberRecord,$numberRecord,[['Name','LIKE','%'.$nameProduct .'%']]);
		if(($pageList+1)*$numberRecord >=count(Product::all())){
			$seeMore = false;
		}

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
