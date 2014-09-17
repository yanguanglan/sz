<?php
/**
 * 检验报告号生成表
 */
class ItemIdentityGeneration extends \Eloquent {
	protected $fillable = ['item', 'identity', 'used'];
}