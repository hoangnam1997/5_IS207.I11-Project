<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = true;
    protected $table = 'order';
    protected $fillable = ['id','Description','ID_Promotion','ID_DeliveryPlace','CreateDate','ConfirmDate','IsPaied','IsDelivered','IsDelete','ID_User'];
    // lấy danh sách hóa đơn
	public function OrderProduct(){
		return $this->hasMany('App\OrderProduct','ID_Order');
	}
	public function OrderPromotion(){
		return $this->belongsTo('App\Promotion','ID_Promotion');
	}
}
