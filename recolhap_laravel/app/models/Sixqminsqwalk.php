<?php

class Sixqminsqwalk extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_six_mins_walk';
	public $primaryKey='six_mins_walk_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}