<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = true;
    protected $table = 'cart';
    protected $fillable = ['id','Description','IsDelete'];
    
}
