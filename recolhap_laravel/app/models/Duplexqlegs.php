<?php

class Duplexqlegs extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_duplex_legs';
	public $primaryKey='duplex_legs_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}