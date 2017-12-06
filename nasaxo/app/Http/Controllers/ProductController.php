<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product as Product;
use App\ProductCategory as ProductCategory;
class ProductController extends Controller
{
	public function Get(){
		$aParameter = array_merge($_GET,$_POST);
		if(isset($aParameter['id'])){
			$product = Product::find($aParameter['id']);
			$listCategory = ProductCategory::all();
			return view('ProductDetail.index',['categorys'=>$listCategory,'itemProduct'=>$product]);
		}
		return redirect('/');
	}
}
