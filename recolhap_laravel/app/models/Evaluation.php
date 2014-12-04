<?php

class Evaluation extends \Eloquent {
	protected $fillable = [];
	protected $table='main_eval';
	public $primaryKey='eval_id';

	public function investigator(){
		return $this->belongsTo('Investigator','digiter_id','user_id');
	}

	public function patient(){
		return $this->belongsTo('Patient','patient_id','patient_id');
	}

	public function rightcath () {
		return $this->hasOne('Rightcath','eval_id','eval_id');
	}
}