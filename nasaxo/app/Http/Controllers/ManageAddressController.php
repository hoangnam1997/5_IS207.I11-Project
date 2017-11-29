<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\City as City;
use App\District as District;
use App\Ward as Ward;
use Response;
class ManageAddressController extends Controller
{
    // lấy danh sách city autocomplete
    public function GetCitys(){
        $aMerge = array_merge($_GET, $_POST);
        $term = $aMerge['term'];
        $aReturn=[];
        $mCity = City::where([['Name','LIKE','%'.$term.'%'],['IsDelete','=',false]])->get();
        foreach ($mCity as $value) {
            $aReturn[] = array('id'=>$value->id,'value'=>$value->Name);
        }
        return Response::json($aReturn);
    }
    // lấy danh sách districts autocomplete
    public function GetDistrictsByIdCity(){
        $aMerge = array_merge($_GET, $_POST);
        // tên districts
        $term = $aMerge['term'];
        // id city
        $idCity = $aMerge['idCity'];
        $aReturn=[];
        $mCity = District::where([['Name','LIKE','%'.$term.'%'],['IsDelete','=',false],['ID_City','=', $idCity]])->get();
        foreach ($mCity as $value) {
            $aReturn[] = array('id'=>$value->id,'value'=>$value->Name);
        }
        return Response::json($aReturn);
    }
    // lấy danh sách districts autocomplete
    public function GetWardsByIdDistrict(){
        $aMerge = array_merge($_GET, $_POST);
        // tên districts
        $term = $aMerge['term'];
        // id city
        $idDistrict = $aMerge['idDistrict'];
        $aReturn=[];
        $mCity = Ward::where([['Name','LIKE','%'.$term.'%'],['IsDelete','=',false],['ID_District','=', $idDistrict]])->get();
        foreach ($mCity as $value) {
            $aReturn[] = array('id'=>$value->id,'value'=>$value->Name);
        }
        return Response::json($aReturn);
    }
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
