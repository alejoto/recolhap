<?php

class Hepatic extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_hepatic';
	public $primaryKey='hepatic_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}