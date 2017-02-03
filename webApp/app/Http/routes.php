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
		echo $program->name . " Department: " . $program->department->name . "<br />";
	}
});

// Lists the requirements for each program, junction table
Route::get('/programs/requirements', function() {
	$programs = App\Program::all();
	foreach($programs as $program) {
		echo $program->name . "<br />";
		echo "<ul>";
		foreach($program->requirements as $requirement) {
			echo "<li>" . $requirement->name . "</li>";
		}
		echo "</ul>";
	}
});

// Lists the requirements for each user based on program, junction table
Route::get('/users/checklist', function() {
	$users = App\User::all();
	foreach($users as $user) {
		echo $user->name . "<br />";
		echo "<ul>";
		foreach($user->requirements as $requirement) {
			echo "<li>" . $requirement->name . "</li>";
		}
		echo "</ul>";
	}
});

// Lists each user and his/her program
/* Route::get('/users', function() {
	$users = App\User::all();
	foreach($users as $user) {
		echo $user->name . " Program: " . $user->program->name  . "<br />";
	}
}); */


/***
	Admin Panel
***/
// Shows all users
Route::get('/users', 'UserController@index');

Route::get('/user'

/***
	End Admin Panel
***/

Route::auth();

// Creates a session for routes in group
Route::group(['middleware' => 'web'], function() {
	// Root directory
	Route::get('/', function() {
		return view('welcome');
	});

	// Returns homepage for logged in users. Blocks access for guest users
	Route::get('/home', 'HomeController@index');

	// Show user profile, URL: /user/view/profile
	Route::get('/user/profile/{id}', 'UserController@show');

	// Shows all users
	Route::get('/users', 'UserController@index');
});

