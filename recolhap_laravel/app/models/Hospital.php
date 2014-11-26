<?php

class Hospital extends \Eloquent {
	protected $fillable = [];
	protected $table='main_hospital';
	public $primaryKey='hospital_id';

	//this hasMany evaluations, as events 
	//that collect doctor, patient and registers
	public function evaluation () {
		return $this->hasMany('Evaluation');
	}

	public function investigator () {
		return $this->hasMany('Investigator','hospital_id');
	}

	public function city () {
		return $this->belongsTo('City');
	}
}