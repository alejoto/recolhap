<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index')
	->with('title','wellcome');
});

Route::controller('login','LoginController');

Route::get('/help',function(){
	return View::make('modules.includes.instructions');
});

Route::group(
	array('before' => 'auth'), 
	function() {
		Route::controller('patients','PatientsController');
		//Route::get('patients/page/{page}','PatientsController@page');
		/*Route::get('myaccount.php',
			function(){
				return View::make('modules.myaccount.myaccount');
			}
			)
		;*/
		//Route::resource('patients','PatientsController');
	}
	)
;

