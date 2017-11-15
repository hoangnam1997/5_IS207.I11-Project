<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'Role';
    protected $fillable =['id','Account_id','Description'];
    public function Account(){
    	return $this->belongsTo('App\Account','Account_id','id');
    }
}
