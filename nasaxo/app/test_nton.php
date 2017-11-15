<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test_nton extends Model
{
    public $timestamps = false;
    protected $table = 'test_nton';
    protected $fillable = ['id','Description'];
}
