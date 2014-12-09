<?php

class Surgical extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_surgical';
	public $primaryKey='surgical_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}