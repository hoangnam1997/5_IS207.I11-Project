<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = true;
    protected $table = 'users';
    protected $fillable = ['id','Username','Password','Picture','Email','Description','IsDelete','remember_token'];
   
}
