<?php

class Drugqtreatment extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_drug_treatment';
	public $primaryKey='drug_treatment_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}
