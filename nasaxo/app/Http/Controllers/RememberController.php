<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RememberController extends Controller
{
    public function Index(){
    	return view('Account.RememberFindAccount');
    }
    public function Type(){
    	return view('Account.RememberType');
    }
    public function ChangePass(){
    	return view('Account.RememberChangePass');
    }
    
}
