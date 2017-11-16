<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageProductController extends Controller
{
	// get view product
    public function GetProducts(){
    	return view('ManageProduct.index');
    }
}
