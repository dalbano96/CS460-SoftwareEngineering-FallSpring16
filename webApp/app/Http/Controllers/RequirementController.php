<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Requirement as Requirement;

class RequirementController extends Controller
{
		// Retrieve all records from requirement table
		public function index() {
			// Variable = Model::ALL OF THE PYLONS
			$requirements = Requirement::all();

			// Pass all requirements to the view page
			return view('requirements.index')->with('$requirements'=> $requirements);
		}

    // Retrieve name of requirement
		public function read($id) {
			$requirement = Requirement::find($id);
		}
}
