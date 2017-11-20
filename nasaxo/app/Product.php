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
	public function Pictures(){
		return $this->belongsToMany('App\Picture','ProductPicture','ID_Product','ID_Picture');
	}
}
