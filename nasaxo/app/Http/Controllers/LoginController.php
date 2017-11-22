<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users as Users;
use Cookie;
class LoginController extends Controller
{
	public function index(){
		return view('Account.Login');
	}
    // xác nhận account
	public function Check(){
    	// email login
		if(isset($_POST['email'])){
			$email= $_POST['email'];
		}
		if(isset($_POST['password'])){
			$password= $_POST['password'];
		}
		$user=Users::where([['Email','=',$email],['Password','=',md5($password)]])->get();
		if(count($user)>0){
			// set cookie
			Cookie::queue('accountHome', array('id' =>$user[0]->id,'image'=>'image'));
			return '1';
		}
		return '0';
	}

}
