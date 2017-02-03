<?php

/**
	App\Controller\UserController.php
**/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests;
use App\User as User;
use App\Requirement as Requirement;
use App\Department as Department;
use App\User_Requirement as User_Requirement;

class UserController extends Controller
{
		public function __construct() {
			$this->middleware('auth');
		} 

		// Sends single user information to view userProfile
		/* public function showProfile() {
			if(Auth::check() && Auth::user()->id) {
				return view('userProfile')->with(['user' => $user]);
			}
		} */

		// Show all users
		public function index() {
			$users = User::all();
			return view('admin/index', array('users'=>$users));
		}

		// Show specific user
		public function show($id) {
			$user = User::find($id);
			return view('admin/show', array(	'user'=>$user));
		}

		public function create() {
			return view('user/create');
		}

		public function store() {

		}

		// Work in progress
		public function edit($id) {
			$user = User::findOrFail($id);
			return view('admin/edit', array('user'=>$user));	
		}

		// Update called after edits made 
		public function update($id) {
			$rules = array(
				'name' => 'required',
				'email' => 'required|email'
			);

			$user = find($id);
			$user->name = $request->get('name');
			$user->email = $request->get('email');
			$user->save();
			
			Session::flash('message','Successfully updated user');
			return Redirect::to('users');
		}

		public function destroy($id) {

		}
}
