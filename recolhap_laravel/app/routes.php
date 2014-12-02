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
	->with('title','welcome');
});

Route::controller('login','LoginController');

Route::controller('city','CitiesController');

Route::controller('hospital','HospitalController');

Route::get('/help',function(){
	return View::make('modules.includes.instructions');
});

Route::group(
	array('before' => 'auth'), 
	function() {
		Route::group(
			array('before'=>'addhospital|complete|noactiveyet'),
			function(){
				Route::controller('patients','PatientsController');
				Route::controller('tables','TablesController');
				Route::controller('cath','RightcathController');
			}
			)
		;
		
		Route::controller('complete','CompletedataController');
		Route::resource('accesslist','AccesslistController');
		Route::resource('user','UserController');
		Route::post('activate', 'UserController@activate');
		Route::post('inactivate', 'UserController@inactivate');

		//Right catheter evaluation
		//Route::get('patients/{patient}/cath','RightcathController@index');
	}
	)
;
Route::get('noactiveyet','UserController@noactiveyet');

