<?php

class Dimerqtrop extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_dimer_trop';
	public $primaryKey='dimer_trop_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}