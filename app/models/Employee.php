<?php

class Employee extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array('id');
		// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];


	public function department()
	{
		return $this->belongsTo('Department', 'department_id');
	}
}