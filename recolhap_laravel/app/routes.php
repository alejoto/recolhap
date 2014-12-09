<?php



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

Route::get('pwdreset/{token}','UserController@resetpwd');
Route::post('pwdreset','UserController@savenewpassword');
Route::post('newpwd','UserController@requestnewpwd');
Route::controller('emailtest','EmailTesterController');


Route::group(
	array('before' => 'auth'), 
	function() {
		Route::group(
			array('before'=>'addhospital|complete|noactiveyet'),
			function(){
				//
				//Active-hospital patients routes
				Route::resource('activehospital/patient','ActivehospitalPatientController');
				Route::get('search','ActivehospitalPatientController@search');
				Route::post('search','ActivehospitalPatientController@postsearch');
				Route::get('patientexist','ActivehospitalPatientController@exist');

				//Right catheter routes
				Route::resource('patient.cath','RightcathController');

				//"Post catheter" routes (right catheter must be set first)
				Route::group(
					array('before'=>'cath'),
					function () {
						Route::resource('patient.clinic','ClinicController');
						Route::resource('patient.blood','BloodController');
						Route::resource('patient.imaging','ImagingController');
						Route::resource('patient.performance','PerformanceController');
					}
					)
				;

				//
				Route::controller('tables','TablesController');
				//Route::controller('cath','RightcathController');
			}
			)
		;
		
		Route::controller('complete','CompletedataController');

		//resource controllers
		Route::resource('accesslist','AccesslistController');
		Route::resource('user','UserController');

		//lonely actions
		

		Route::post('activate', 'UserController@activate');
		Route::post('inactivate', 'UserController@inactivate');

		//Right catheter evaluation
		//Route::get('patients/{patient}/cath','RightcathController@index');
	}
	)
;
Route::get('noactiveyet','UserController@noactiveyet');

