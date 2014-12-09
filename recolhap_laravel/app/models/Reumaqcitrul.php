<?php

class Reumaqcitrul extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_reuma_citrul';
	public $primaryKey='citrul_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}