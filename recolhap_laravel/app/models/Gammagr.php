<?php

class Gammagr extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_gammagr';
	public $primaryKey='gammagr_id';


	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}