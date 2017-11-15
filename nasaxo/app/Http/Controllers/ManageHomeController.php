<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageHomeController extends Controller
{
    public function Index(){
    	return view('ManageLogin.ManageLogin');
    }
    public function Login(){
    	return view('ManageHome.index');
    }
}
