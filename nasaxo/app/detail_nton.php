<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_nton extends Model
{
	public $timestamps=false;
	protected $table='detail_nton';
	protected fillable=['id','Account_id','test_id'];
}
