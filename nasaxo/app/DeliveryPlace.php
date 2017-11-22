<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryPlace extends Model
{
    public $timestamps = true;
    protected $table = 'deliveryplace';
    protected $fillable = ['id','ID_User','ID_Ward','ReceiveName','NumberPhone','DeliveryPlaces','IsDelete'];
    
}
