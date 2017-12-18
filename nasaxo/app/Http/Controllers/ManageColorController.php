<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Color as Color;
use Response;
class ManageColorController extends Controller
{
	public function GetColors(){
		return view('ManageColor.index');
	}
	// lấy danh sách màu
	public function actionGetColors(){
		$valueSearch = isset($_GET['term']) ? $_GET['term']: "";
    	$listColors = Color::where([['IsDelete','=',false],['Description','like','%'.$valueSearch.'%']])->get();
        $aReturn=[];
        foreach ($listColors as $value) {
            $aReturn[] = array('id'=>$value->id,'value'=>$value->Description,'color'=>$value->Color);
        }
        return Response::json($aReturn);
	}		
}
