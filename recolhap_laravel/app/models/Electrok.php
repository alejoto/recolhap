<?php

class Electrok extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_electrok';
	public $primaryKey='electrok_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}