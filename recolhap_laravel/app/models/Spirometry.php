<?php

class Spirometry extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_spirometry';
	public $primaryKey='spirometry_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}