<?php

class Xqray extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_x_ray';
	public $primaryKey='x_ray_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}

}
