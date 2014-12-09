<?php

class Coag extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_coag';
	
	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}

}
