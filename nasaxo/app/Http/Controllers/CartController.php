<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory as ProductCategory;

class CartController extends Controller
{
	// goto view cart
    public function Index(){
        // category 
        $listCategory = ProductCategory::all();
    	return view('Cart.index',['categorys'=>$listCategory]);
    }
    // goto view pay cart
     public function Order(){
    	return view('Order.payment_address',['categorys'=>$listCategory]);
    }
    // goto view invoice cart
     public function Invoice(){
    	return view('Order.invoice',['categorys'=>$listCategory]);
    }
}
