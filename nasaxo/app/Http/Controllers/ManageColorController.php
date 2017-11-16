<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageColorController extends Controller
{
	public function GetColors(){
		return view('ManageColor.index');
	}	
}
