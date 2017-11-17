<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageSizeController extends Controller
{
    public function GetSizes(){
    	return view('ManageSize.index');
    }
}
