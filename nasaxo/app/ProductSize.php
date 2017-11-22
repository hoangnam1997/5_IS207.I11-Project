<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    public $timestamps = true;
    protected $table = 'size';
    protected $fillable = ['id','ID_Size','ID_Product','IsDelete'];

}
