<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
				$requirements = DB::table('requirements')->get();
				// $programs = DB::table('programs')->get();
				// $users = DB::table('users')->get();
        return view('la.dashboard',['requirements' => $requirements]);
    }

		/**
		 * Send email
		 *
		 *
 		 */
		public function sendEmail(Request $request)
		{
		}
}
