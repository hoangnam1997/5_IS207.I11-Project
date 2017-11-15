<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagePromotionController extends Controller
{
	// lấy view promotion
    public function GetPromotion(){
    	return view('ManagePromotion.index');
    }
}
