<?php

class Reuma extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_reuma';
	public $primaryKey='reuma_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}