<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;
use App\Requirement as Requirement;

class UserController extends Controller
{
		public function __construct() {
			$this->middleware('auth');
		} 

		// Direct to user's page (needs to be created)
		public function index() {
			return view('user');
		}

		// Sends single user information to view userProfile
		public function showProfile($id) {
			return view('userProfile', ['user' => User::findORFail($id)]);
		}
}
