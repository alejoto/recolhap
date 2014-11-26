<?php

class Patient extends \Eloquent {
	protected $table = 'main_patient';
	public $primaryKey='patient_id';
	protected $fillable = [];

	public function leftcatheter () {
		return $this->hasMany('Leftcatheter','patient_id');
	}
}