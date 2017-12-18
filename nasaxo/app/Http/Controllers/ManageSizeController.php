<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Size as Size;
use Response;
class ManageSizeController extends Controller
{
	public function GetSizes(){
		return view('ManageSize.index');
	}
    // lấy danh sách size
	public function actionGetSizes(){
		$valueSearch = isset($_GET['term']) ? $_GET['term']: "";
		$listSizes = Size::where([['IsDelete','=',false],['Sizes','like','%'.$valueSearch.'%']])->get();
		$aReturn=[];
		foreach ($listSizes as $value) {
			$aReturn[] = array('id'=>$value->id,'value'=>$value->Sizes);
		}
		return Response::json($aReturn);
	}		
}
