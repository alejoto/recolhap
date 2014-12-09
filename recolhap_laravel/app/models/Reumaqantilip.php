<?php

class Reumaqantilip extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_reuma_antilip';
	public $primaryKey='antilip_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}