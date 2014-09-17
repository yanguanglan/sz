<?php

class ItemReceive extends \Eloquent {
	protected $fillable = [];

	public static $rules = array(
		'supplier_id'=>'required',
	);

	//代理商
	public function supplier()
	{
		return $this->belongsTo('Supplier');
	}
}