<?php

class Evaluation extends \Eloquent {
	protected $fillable = [];
	protected $table='main_eval';
	public $primaryKey='eval_id';

	public function investigator(){
		return $this->belongsTo('Investigator','digiter_id','user_id');
	}

	public function patient(){
		return $this->belongsTo('Patient','patient_id','patient_id');
	}

	public function rightcath () {
		return $this->hasOne('Rightcath','eval_id','eval_id');
	}

	public function arterialgasses() {
		return $this->hasOne('Arterialgasses','eval_id','eval_id');
	}
	
	public function coag() {
		return $this->hasOne('Coag','eval_id','eval_id');
	}
	
	public function cpqstressqtest() {
		return $this->hasOne('Cpqstressqtest','eval_id','eval_id');
	}
	
	public function dimerqtrop() {
		return $this->hasOne('Dimerqtrop','eval_id','eval_id');
	}
	
	public function drugqtreatment() {
		return $this->hasOne('Drugqtreatment','eval_id','eval_id');
	}
	
	public function duplexqlegs() {
		return $this->hasOne('Duplexqlegs','eval_id','eval_id');
	}
	
	public function ecocardio() {
		return $this->hasOne('Ecocardio','eval_id','eval_id');
	}
	
	public function electrok() {
		return $this->hasOne('Electrok','eval_id','eval_id');
	}
	
	public function firstqeval() {
		return $this->hasOne('Firstqeval','eval_id','eval_id');
	}
	
	public function followqup() {
		return $this->hasOne('Followqup','eval_id','eval_id');
	}
	
	public function gammagr() {
		return $this->hasOne('Gammagr','eval_id','eval_id');
	}
	
	public function hb() {
		return $this->hasOne('Hb','eval_id','eval_id');
	}
	
	public function hemoqdim() {
		return $this->hasOne('Hemoqdim','eval_id','eval_id');
	}
	
	public function hemoqpept() {
		return $this->hasOne('Hemoqpept','eval_id','eval_id');
	}
	
	public function hemoqthyro() {
		return $this->hasOne('Hemoqthyro','eval_id','eval_id');
	}
	
	public function hemoqtropo() {
		return $this->hasOne('Hemoqtropo','eval_id','eval_id');
	}
	
	public function hepatic() {
		return $this->hasOne('Hepatic','eval_id','eval_id');
	}
	
	public function hyperclotting() {
		return $this->hasOne('Hyperclotting','eval_id','eval_id');
	}
	
	public function mri() {
		return $this->hasOne('Mri','eval_id','eval_id');
	}
	
	public function outcome() {
		return $this->hasOne('Outcome','eval_id','eval_id');
	}
	
	public function pepqnatr() {
		return $this->hasOne('Pepqnatr','eval_id','eval_id');
	}
	
	public function pulmqarteriography() {
		return $this->hasOne('Pulmqarteriography','eval_id','eval_id');
	}
	
	public function renal() {
		return $this->hasOne('Renal','eval_id','eval_id');
	}
	
	public function reuma() {
		return $this->hasOne('Reuma','eval_id','eval_id');
	}
	
	public function reumaqana() {
		return $this->hasOne('Reumaqana','eval_id','eval_id');
	}
	
	public function reumaqanca() {
		return $this->hasOne('Reumaqanca','eval_id','eval_id');
	}
	
	public function reumaqantilip() {
		return $this->hasOne('Reumaqantilip','eval_id','eval_id');
	}
	
	public function reumaqcitrul() {
		return $this->hasOne('Reumaqcitrul','eval_id','eval_id');
	}
	
	public function reumaqenas() {
		return $this->hasOne('Reumaqenas','eval_id','eval_id');
	}
	
	public function reumaqspana() {
		return $this->hasOne('Reumaqspana','eval_id','eval_id');
	}
	
	public function sixqminsqwalk() {
		return $this->hasOne('Sixqminsqwalk','eval_id','eval_id');
	}
	
	public function spirometry() {
		return $this->hasOne('Spirometry','eval_id','eval_id');
	}
	
	public function surgical() {
		return $this->hasOne('Surgical','eval_id','eval_id');
	}
	
	public function tcqangio() {
		return $this->hasOne('Tcqangio','eval_id','eval_id');
	}
	
	public function vih() {
		return $this->hasOne('Vih','eval_id','eval_id');
	}
	
	public function xqray() {
		return $this->hasOne('Xqray','eval_id','eval_id');
	}
	

}
/*
*/