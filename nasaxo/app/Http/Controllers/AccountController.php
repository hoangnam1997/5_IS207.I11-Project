<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function Index(){
    	return view('Account.index');
    }
    public function Info(){
    	return view('Account.InfomationAccount');
    }
    public function Mess(){
    	return view('Account.MessageAccount');
    }
}
