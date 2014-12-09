<?php

class Reumaqana extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_reuma_ana';
	public $primaryKey='ana_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}