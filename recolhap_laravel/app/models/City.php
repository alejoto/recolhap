<?php

class City extends \Eloquent {
	protected $fillable = [];
	public function hospital () {
		return $this->hasMany('Hospital');
	}
}