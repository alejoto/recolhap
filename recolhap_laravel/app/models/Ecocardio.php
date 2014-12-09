<?php

class Ecocardio extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_ecocardio';
	public $primaryKey='ecocardio_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}