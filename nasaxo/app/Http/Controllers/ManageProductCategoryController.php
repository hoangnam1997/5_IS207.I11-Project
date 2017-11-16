<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageProductCategoryController extends Controller
{
    public function GetProductCategorys(){
    	return view('ManageProductCategory.index');
    }
}
