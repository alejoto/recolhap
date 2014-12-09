<?php

class Mri extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_mri';
	public $primaryKey='mri_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}