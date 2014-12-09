<?php

class Firstqeval extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_first_eval';
	public $primaryKey='first_eval_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}