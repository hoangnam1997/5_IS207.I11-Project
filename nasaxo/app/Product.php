<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;
	// table
	protected $table = 'Product';
	// fill visit
	protected $fillable = ['id','ID_ProductCategory','Name','Description','IsDelete'];
	// fill hidden
	// protected $hidden = [''];
	public function Prices(){
		return $this->hasMany('App\ProductPrice','ID_Product');
	}
	// danh sacsh picture
	public function Pictures(){
		return $this->belongsToMany('App\Picture','ProductPicture','ID_Product','ID_Picture');
	}
	// danh sacsh order detail
	public function OderDetails(){
		return $this->hasMany('App\OrderProduct','ID_Product');
	}
	// láy danh sách size 
	public function Sizes(){
		return $this->belongsToMany('App\Size','ProductSize','ID_Product','ID_Size');
	}
	// láy danh sách color 
	public function Colors(){
		return $this->belongsToMany('App\Color','ProductColor','ID_Product','ID_Color');
	}
}
