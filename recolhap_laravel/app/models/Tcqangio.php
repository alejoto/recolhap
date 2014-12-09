<?php

class Tcqangio extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_tc_angio';
	public $primaryKey='tc_angio_id';
	
	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}

}