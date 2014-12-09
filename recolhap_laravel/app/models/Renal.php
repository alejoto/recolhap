<?php

class Renal extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_renal';
	public $primaryKey='renal_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}