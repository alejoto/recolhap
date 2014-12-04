<?php

class Rightcath extends \Eloquent {
	protected $fillable = [];
	protected $table='hap_right_cathet';
	public $primaryKey='right_cathet_id';

	public function vasoreactivetest () {
		return $this->hasOne('Vasoreactivetest','rightcath_id','right_cathet_id');
	}
}