<?php

class OrderDetail extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array('id');

	public function item()
	{
		return $this->belongsTo('Item', 'item_id');
	}
}