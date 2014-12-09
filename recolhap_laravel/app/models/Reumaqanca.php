<?php

class Reumaqanca extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_reuma_anca';
	public $primaryKey='anca_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}