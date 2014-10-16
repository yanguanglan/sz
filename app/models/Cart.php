<?php

class Cart extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	protected $guarded = array('id');

	public function customer()
	{
		return $this->belongsTo('Customer', 'customer_id');
	}

	public function item()
	{
		return $this->belongsTo('Item', 'item_id');
	}
}