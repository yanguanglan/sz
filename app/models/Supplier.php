<?php

class Supplier extends \Eloquent {

	public static $rules = [
		// 'title' => 'required'
	];

	protected $fillable = ['name', 'type', 'mobile', 'telephone', 'mail', 'url', 'qq', 'wechat', 'street', 'address',
						   'postcode', 'acreage', 'company', 'amount', 'output', 'bank', 'bank_address',
						   'account_no', 'account_name', 'audit_status'];
}