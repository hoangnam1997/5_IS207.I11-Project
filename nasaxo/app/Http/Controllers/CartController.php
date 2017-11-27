<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory as ProductCategory;
use App\Users as Users;
use App\OrderProduct as OrderProduct;
use App\Product as Product;
class CartController extends Controller
{
	// goto view cart
    public function Index(){
        if($this->isLogin([0,1])){
            // category 
            $listCategory = ProductCategory::all();
            $idUser= CartController::getIdLogin();
            $listCartProduct = OrderProduct::where([['IsDelete','=',false],['ID_User','=',$idUser],['IsInCart','=',1]])->get();
            return view('Cart.index',['categorys'=>$listCategory,'listCartProduct'=>$listCartProduct]);
        }
        return redirect('/');
    }
    // goto view pay cart
    public function Order(){
        $listCategory = ProductCategory::all();
        return view('Order.payment_address',['categorys'=>$listCategory]);
    }
    // goto view invoice cart
    public function Invoice(){
        $listCategory = ProductCategory::all();
        return view('Order.invoice',['categorys'=>$listCategory]);
    }
    // thêm vào giỏ hàng
    public function Add(){
        $arrMethod = array_merge($_GET, $_POST);
        if($this->isLogin([0,1])){
            $idProduct = $arrMethod['productId'];
            $idUser= CartController::getIdLogin();
            $idSize =isset($arrMethod['size']) ? $arrMethod['size'] : Product::find($idProduct)->Sizes()->get()[0]->id;
            $idColor = isset($arrMethod['color']) ? $arrMethod['color'] : Product::find($idProduct)->Colors()->get()[0]->id;
            $isInCart = 1;
            $description='';
            $cartProductOld=OrderProduct::where([['ID_Product','=',$idProduct],['ID_User','=',$idUser],['IsInCart','=',1]])->get();
            if(count($cartProductOld)>0){
                $cartProductOld[0]->Count = $cartProductOld[0]->IsDelete ? 1 : ++$cartProductOld[0]->Count;
                $cartProductOld[0]->IsDelete = false;
                $cartProductOld[0]->save();
            }else{
                $cartProduct = new OrderProduct;
                $cartProduct->ID_Order=null;
                $cartProduct->ID_Product = $idProduct;
                $cartProduct->ID_User = $idUser;
                $cartProduct->ID_Size=$idSize;
                $cartProduct->ID_Color=$idColor;
                $cartProduct->Count = 1;
                $cartProduct->IsDelete = 0;
                $cartProduct->IsInCart =$isInCart;
                $cartProduct->Description =$description;
                $cartProduct->save();
            }
            return '1';
        }
        return '0';
        
    }
}
