<?php

class Outcome extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_outcome';
	public $primaryKey='outcome_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}