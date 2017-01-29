<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

// Displays all of the departments
Route::get('/departments', function() {
	$departments = App\Department::all();
	foreach($departments as $department){
		echo $department->name . "<br />";
	} 
});

// Displays all of the requirements
Route::get('/requirements', function() {
		$requirements = App\Requirement::all();
		foreach($requirements as $requirement){
			echo $requirement->name . "<br />";
		}
});

// Displays all of the programs (Does not work)
Route::get('/programs', function() {
	$programs = App\Program::all();
	foreach($programs as $program){
		echo $program->name . "<br />";
	}
});

Route::auth();
