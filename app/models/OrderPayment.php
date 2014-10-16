<?php

class OrderPayment extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array('id');

	public function paymentmethod()
	{
		return $this->belongsTo('PaymentMethod', 'payment_method_id');
	}
}