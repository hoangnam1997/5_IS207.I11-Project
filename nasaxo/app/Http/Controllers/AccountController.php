<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategory as ProductCategory;
use App\Users as Users;
use App\Message as Message;
class AccountController extends Controller
{
	public function Index(){
		if($this->isLogin([1,2])){
            // category 
			$listCategory = ProductCategory::all();
			$idUser= $this->getIdLogin();
			// lấy số lượng message
			$countNotify=Message::where([['IsNotify','=',true],['IsDelete','=',false],['ID_Users','=',$idUser]])->count();
			return view('Account.index',['categorys'=>$listCategory,'countNotify'=>$countNotify]);
		}
		return redirect('/');
	}
	// thông tin account
	public function Info(){
		$idUser= $this->getIdLogin();
		$user = Users::find($idUser);
		if(count($user)>0){
			return view('Account.InfomationAccount',['user'=>$user]);
		}
		return 'Có lỗi xảy ra!';
	}
	// tin nhắn account
	public function Mess(){
		$idUser= $this->getIdLogin();
		$user = Users::find($idUser);
		if(count($user)>0){
			return view('Account.MessageAccount',['user'=>$user]);
		}
		return 'Có lỗi xảy ra!';
	}
	// thay đổi mật khẩu
	public function CheckPassOld(){
		if($this->isLogin([1,2])){
			$aParameter = array_merge($_GET,$_POST);
			$passOld = $aParameter['passOld'];
			$idUser= $this->getIdLogin();
			$user = Users::where([['id','=',$idUser],['Password','=',md5($passOld)]])->get();
			if(count($user)>0 && isset($user[0]->id)){
				return '1';
			}
		}
		return '0';
	}
	// xóa mess
	public function UpdateMess(){
		if($this->isLogin([1,2])){
			$aParameter = array_merge($_GET,$_POST);
			if(isset($aParameter['idUpdate'])){
				$mess=Message::find($aParameter['idUpdate']);
				if($mess){
					if(isset($aParameter['notify'])){
						$mess->IsNotify = $aParameter['notify'] == '1' ? false : true;
					}else{
						$mess->IsDelete = true;
					}
					$mess->save();
					return '1';
				}
			}
		}
		return '0';
	}
	// thay đổi thông tin
	public function ChangeInfo(){
		if($this->isLogin([1,2])){
			$aParameter = array_merge($_GET,$_POST);
			$idUser =  $this->getIdLogin();
			$user = null;
			if(isset($aParameter['PasswordOld']) && isset($aParameter['Password'])){
				$user=Users::where([['id','=',$idUser],['Password','=',md5($aParameter['PasswordOld'])]])->get();
			}else {
				$user=Users::where([['id','=',$idUser]])->get();
			}
			if($user!=null && count($user)>0){
				if(isset($aParameter['PasswordOld']) && isset($aParameter['Password'])){
					$user[0]->Description = $aParameter['Description'];
					$user[0]->Password = md5($aParameter['Password']);
				}else {
					$user[0]->Description = $aParameter['Description'];
				}
				if($user[0]->save())
					return '1';
			}
		}
		return '0';
	}
	

}
