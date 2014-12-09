<?php

class Hb extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_hb';
	public $primaryKey='hb_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}
