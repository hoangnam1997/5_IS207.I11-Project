<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    public $timestamps = true;
    protected $table = 'cartproduct';
    protected $fillable = ['id','ID_Product','CreateDate','Count','IsDelete'];
  
}
