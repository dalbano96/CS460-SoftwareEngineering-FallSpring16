<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests;
use App\User as User;
use App\Requirement as Requirement;

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

		public function getId($id) {
			$user = User::find($id);
			return view('userProfile')->with(['user' => $user]);
		}
}
