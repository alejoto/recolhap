<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class MainHospitalTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();
		$hosp=array(
			'Hospital Pablo Tobon Uribe',
			'Clinica SHAIO',
			'Fundacion San Vicente de Paul'
			)
		;

		foreach($hosp as $v)
		{
			Hospital::create(
				array(
					'hospital_name'=>$v,
					'city_id'=>11
					)
				)
			;
		}

		//
	}

}