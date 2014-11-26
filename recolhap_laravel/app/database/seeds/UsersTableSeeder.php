<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();
		//DB::table('users')->truncate();

		$theusers=array(
			"joaleto@yahoo.com"				=>'12345',
			'claudiovillaquiran@gmail.com'	=>'tayito',
			'fpernett@cable.net.co'			=>'MIVIDAERESTU',
			'crdc2001@gmail.com'			=>'12345678',
			'carmachado@hotmail.com'		=>'12345678',
			'Wilhenariza@yahoo.es'			=>'teodoro',
			'alejoto@gmail.com'				=>'jatter',
			'aliriorodrigo@yahoo.com'		=>'19781978',
			'alv@une.net.co'				=>'crisis605',
			'avanegasanacatalina@gmail.com'	=>'angieynicolle',
			'cohiba.bautista@gmail.com'		=>'fb19675094',
			'hortega@une.net.co'			=>'io140788',
			'joaleto@yahoo.com'				=>'12345',
			'julcefo@yahoo.com'				=>'julio0314',
			'natygon@hotmail.com'			=>'mariita',
			'patriciagarcia78@yahoo.com'	=>'berni2008',
			'rubenduenas@gmail.com'			=>'JRD19336317'
			)
		;

		/*foreach($theusers as $k=>$v)
		{
			$user = new User;
			$user->email = $k;
			$user->pwd = Hash::make($v);
			$user->save();
		}*/

		/*
		NO STORED
		"0","samile11@yahoo.com","12345","NN","0",NULL
		*/
	}

}