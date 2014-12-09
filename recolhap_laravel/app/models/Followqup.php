<?php

class Followqup extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_follow_up';
	public $primaryKey='follow_up_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}
