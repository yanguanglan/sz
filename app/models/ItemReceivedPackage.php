<?php

class ItemReceivedPackage extends \Eloquent {
	protected $fillable = [];

	//代理商
	public function itemReceivedPackageDeatils()
	{
		return $this->hasMany('ItemReceivedPackageDetail', 'package_id');
	}
}