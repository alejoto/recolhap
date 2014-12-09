<?php

class Pulmqarteriography extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_pulm_arteriography';
	public $primaryKey='pulm_arteriography_id';

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}