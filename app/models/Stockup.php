<?php

class Stockup extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array('id');

	public function stockupdetails()
	{
		return $this->hasMany('StockupDetail', 'stockup_id');
	}
}