<?php

class Investigator extends \Eloquent {
	protected $table = 'main_investigator';
	protected $fillable = [];

	public function hospital () {
		return $this->belongsTo('Hospital');
	}
}