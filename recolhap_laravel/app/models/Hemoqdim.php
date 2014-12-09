<?php

class Hemoqdim extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_hemo_dim';
	public $primaryKey='dim_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}
