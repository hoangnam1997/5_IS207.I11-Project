<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageAddressController extends Controller
{
	// trả lại view Districts
    public function GetDistrictView(){
    	return 'Districts';
    }
	// trả lại view City
    public function GetCityView(){
    	return 'Citys';
    } 
	// trả lại view Wards
    public function GetWardView(){
    	return 'Wards';
    }
}
