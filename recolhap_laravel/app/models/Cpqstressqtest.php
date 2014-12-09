<?php

class Cpqstressqtest extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_cp_stress_test';
	public $primaryKey='cp_stress_test_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}