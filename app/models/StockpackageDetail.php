<?php

class StockpackageDetail extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array('id');

	public function stockpackage()
	{
		return $this->belongsTo('Stockpackage', 'package_id');
	}
}