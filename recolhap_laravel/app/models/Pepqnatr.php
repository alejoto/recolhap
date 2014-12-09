<?php

class Pepqnatr extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_pep_natr';
	public $primaryKey='pep_natr_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}