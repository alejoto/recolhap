<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class CitiesTableSeeder extends Seeder {

	public function run()
	{
		$cities=array(
			'ARMENIA'
			,'BUCARAMANGA'
			,'BARRAQUILLA'
			,'BUGA'
			,'CALI'
			,'CARTAGENA'
			,'CUCUTA'
			,'DUITAMA'
			,'IBAGUE'
			,'MANIZALES'
			,'MEDELLIN'
			,'MONTERIA'
			,'NEIVA'
			,'PASTO'
			,'PEREIRA'
			,'POPAYAN'
			,'RIOHACHA'
			,'SANTA MARTA'
			,'TUNJA'
			,'VALLEDUPAR'
			,'VILLAVICENCIO'
			)
		;
		

		foreach($cities as $c)
		{
			City::create(
				array(
					'name'=>$c,
					'country_id'=>1
					)
				)
			;
		}
	}

}