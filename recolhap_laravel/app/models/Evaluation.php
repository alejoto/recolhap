<?php

class Evaluation extends \Eloquent {
	protected $fillable = [];
	protected $table='main_eval';
	public $primaryKey='eval_id';

	public function investigator(){
		return $this->belongsTo('Investigator','digiter_id','user_id');
	}
}