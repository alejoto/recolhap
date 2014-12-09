<?php

class Hemoqtropo extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_hemo_tropo';
	public $primaryKey='tropo_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}
