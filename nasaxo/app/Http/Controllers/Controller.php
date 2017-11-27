<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Users as Users;
use Cookie;
class Controller extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // check account with roles
    public function isLogin($role=[]){
        $account = null;
        if(cookie::get('accountHome')!=null){
          $accountCookie = cookie::get('accountHome');
          $savedAccount = json_decode($accountCookie, true);
          $account=Users::where([['IsDelete','=',false]])->find($savedAccount['id']);
          $roleUser=$account->Roles()->get();
          if(count($roleUser)>0 && in_array($roleUser[0]->id,$role)){
             return '1';
         }else {
            return '0';
        }
    }
    return '0';
    }
    public function checklogin(){
        $role=array_merge($_POST, $_GET);
        $account = null;
        if(cookie::get('accountHome')!=null){
          $accountCookie = cookie::get('accountHome');
          $savedAccount = json_decode($accountCookie, true);
          $account=Users::where([['IsDelete','=',false]])->find($savedAccount['id']);
          $roleUser=$account->Roles()->get();
          if(count($roleUser)>0 && in_array($roleUser[0]->id,$role)){
             return '1';
         }else {
            return '0';
        }
    }
    return '0';
}
}
