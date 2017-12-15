<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product as Product;
class ManageProductController extends Controller
{
	// get view product
	public function GetProducts(){
		return view('ManageProduct.index');
	}
    // get view product
	public function actionSearch(){
		$aParameter = array_merge($_POST, $_GET);
		$valueSearch = isset($aParameter['valueSearch']) ? $aParameter['valueSearch'] : "";
		$listProduct = Product::where([['IsDelete','=',false],['Name','like','%'.$valueSearch.'%']])->get();
		return view('ManageProduct._search',['listProduct'=>$listProduct]);
	}
	// get view product
	public function actionDelete(){
		$aParameter = array_merge($_POST,$_GET);
        $idDelete =isset($aParameter['idSend'])? $aParameter['idSend'] : "";
        $item = Product::find($idDelete);
        if(isset($item)){
            $item->IsDelete = true;
            if($item->save())
                return '1';
        }
        return '0';
	}
	public function actionGetPrices(){
		$aParameter = array_merge($_POST,$_GET);
        $idDelete =isset($aParameter['idSend'])? $aParameter['idSend'] : "";
        $item = Product::find($idDelete);
        if(isset($item)){
        	$listPrice = $item->Prices()->get();
        	$aResult=[];
        	foreach ($listPrice as $key => $value) {
        		$aResult[] = array(
        			'data'=>array(	'STT' =>$key+1 ,
        							'StartDay'=> $value->StartDate,
        							'EndDay'=> $value->EndDate==null ?"":$value->EndDate,
        							'Price'=> $value->Price .' VNĐ',
        							'Discount'=>$value->Discount. '%'
        							 ),
        			'flag'=>0
        		);
        	}
        	return json_encode($aResult);
        }
        return '0';
	}
}
