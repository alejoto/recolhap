<?php

class Hemoqpept extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_hemo_pept';
	public $primaryKey='petp_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}
