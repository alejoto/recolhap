<?php

class Hemoqthyro extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_hemo_thyro';
	public $primaryKey='thyro_id';
	

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}