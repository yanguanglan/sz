<?php

class Order extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	protected $guarded = array('id');

	public function customer()
	{
		return $this->belongsTo('Customer');
	}

	public function paymentmethod()
	{
		return $this->belongsTo('PaymentMethod', 'payment_method_id');
	}

	public function shippingmethod()
	{
		return $this->belongsTo('ShippingMethod', 'shipping_method_id');
	}

	public function shippings()
	{
		return $this->hasMany('OrderShipping', 'order_id');
	}

	public function payments()
	{
		return $this->hasMany('OrderPayment', 'order_id');
	}

	public function customeraddress()
	{
		return $this->belongsTo('CustomerReceivedAddres', 'customer_address_id');
	}

	public function orderdetails()
	{
		return $this->hasMany('OrderDetail', 'order_id');
	}

	public function orderstockup()
	{
		return $this->hasOne('Stockup', 'order_id');
	}

	public function orderstockpackages()
	{
		return $this->hasMany('Stockpackage', 'order_id');
	}

}