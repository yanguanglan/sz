<?php

class HistoryWarehouse extends \Eloquent {
	protected $fillable = ['identity', 'item', 'batch', 'quantity', 'position', 'operator'];
}