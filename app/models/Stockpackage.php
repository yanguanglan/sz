<?php

class Stockpackage extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array('id');

	public function stockpackagedetails()
	{
		return $this->hasMany('StockpackageDetail', 'package_id');
	}
}
