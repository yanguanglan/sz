<?php

class Department extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array('id');
		// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

}