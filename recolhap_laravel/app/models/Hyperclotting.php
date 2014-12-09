<?php

class Hyperclotting extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_hyperclotting';
	public $primaryKey='hyperclotting_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}