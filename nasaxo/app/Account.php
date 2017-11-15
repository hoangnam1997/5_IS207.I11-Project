<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	public $timestamps = false;
	// table
	protected $table = 'Account';
	// fill visit
	protected $fillable = ['id','Name','Description','image'];
	// fill hidden
	protected $hidden = ['Pass'];
	public function Role(){
		return $this->hasMany('App\Role'); 
	}
	// lấy danh sách nton
	public function ntonFunction(){
		return $this->belongsToMany('App\test_nton','detail_nton','Account_id','test_id');
	}
}
