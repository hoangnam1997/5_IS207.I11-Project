<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users as Users;
use Cookie;
class LoginController extends Controller
{
	protected $imageDefault = "accounts/account.png";
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
		// get user
		$user=Users::where([['Email','=',$email],['Password','=',md5($password)]])->get();
		if(count($user)>0){
			// $imgUrl = $this->$imageDefault;
			$picture =  $user[0]->Picture()->get();
			if(count($picture)>0){
				$imgUrl=$picture[0]->Url;
			}
			// set cookie
			$cookieValue= array('id' =>$user[0]->id,'image'=>$imgUrl);
			Cookie::queue('accountHome',json_encode($cookieValue));
			return view('Account._partialAceptLogin',['Account'=>$cookieValue]);
		}
		return '0';
	}
	public function Out(){
    	// email login
		Cookie::queue(
			Cookie::forget('accountHome')
		);
		return view('Account._partialLogin');
	}
}
