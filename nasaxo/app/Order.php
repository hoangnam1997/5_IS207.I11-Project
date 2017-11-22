<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = true;
    protected $table = 'order';
    protected $fillable = ['id','Description','ID_Promotion','ID_DeliveryPlace'
,'CreateDate','ConfirmDate','IsPaied','IsDelivered','IsDelete'];

}
