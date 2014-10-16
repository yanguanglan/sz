<?php

class ItemCategory extends \Eloquent {

	protected $table = 'item_categories';
// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	protected $guarded = array('id');

}