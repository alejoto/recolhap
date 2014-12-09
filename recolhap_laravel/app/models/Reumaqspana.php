<?php

class Reumaqspana extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_reuma_spana';
	public $primaryKey='spana_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}