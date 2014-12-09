<?php

class Arterialgasses extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_arterialgasses';
	public $primaryKey='arterialgasses_id';
//

	public function evaluation(){
		return $this->belongsTo('Evaluation','eval_id','eval_id');
	}
}
