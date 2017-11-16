<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
	// goto view cart
    public function Index(){
    	return view('Cart.index');
    }
    // goto view pay cart
     public function Order(){
    	return view('Order.payment_address');
    }
    // goto view invoice cart
     public function Invoice(){
    	return view('Order.invoice');
    }
}
