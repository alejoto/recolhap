<?php

class Patient extends \Eloquent {
	protected $table = 'main_patient';
	public $primaryKey='patient_id';
	protected $fillable = [];

	public function evaluation () {
		return $this->hasMany('Evaluation','patient_id','patient_id');
	}

	public function leftcatheter () {
		return $this->hasMany('Leftcatheter','patient_id');
	}

	public function scopeTired ($query) {
		return $query	->where('')
		;
	}
	
}