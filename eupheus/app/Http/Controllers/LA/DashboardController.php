<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use Validator;
use Datatables;
use Collective\Html\FormFacade as Form;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

use Dwij\Laraadmin\Helpers\LAHelper;

use App\Models\Student;
use App\User;
use App\Role;
use Mail;


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
			Mail::send('emails.contact', ['name'=>$request->get('name'), 'email'=> $request->get('email'), 'user_message' => $request->get('message')], function($message) {
				$message->from('hilograd@hawaii.edu');
				$message->to('hilograd@hawaii.edu', 'Project Eupheus - UH Hilo Graduate Division Office')->subject('Project Eupheus Inquiry');
			});
			return redirect(config('laraadmin.adminRoute')."/dashboard");
		}
}
