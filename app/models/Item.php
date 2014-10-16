<?php

class Item extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $fillable = [];

	protected $guarded = array('id');

	//分类
	public function category()
	{
		return $this->belongsTo('ItemCategory', 'category_id');
	}

	//货品位置
	public function warehouses()
	{
		return $this->hasMany('Warehouse', 'item', 'code');
	}
}