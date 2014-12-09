<?php

class Vih extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_vih';
	public $primaryKey='vih_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}
