<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory as ProductCategory;
use App\Users as Users;

class CartController extends Controller
{
	// goto view cart
    public function Index(){
        if($this->isLogin([0,1])){
            // category 
            $listCategory = ProductCategory::all();
            return view('Cart.index',['categorys'=>$listCategory]);
        }
        return redirect('/');
    }
    // goto view pay cart
    public function Order(){
    	return view('Order.payment_address',['categorys'=>$listCategory]);
    }
    // goto view invoice cart
    public function Invoice(){
    	return view('Order.invoice',['categorys'=>$listCategory]);
    }
    // thêm vào giỏ hàng
    public function Add(){
        $arrMethod = array_merge($_GET, $_POST);
        return '1';
    }
}
