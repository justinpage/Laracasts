<?php

class Order extends \Eloquent {
	protected $guarded = ['id', 'created_id', 'updated_at'];
	protected $fillable = [];
}
