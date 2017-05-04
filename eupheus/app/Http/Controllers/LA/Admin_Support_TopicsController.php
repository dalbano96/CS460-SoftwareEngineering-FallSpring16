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

use App\Models\Admin_Support_Topic;

class Admin_Support_TopicsController extends Controller
{
	public $show_action = true;
	public $view_col = 'questions';
	public $listing_cols = ['id', 'name', 'questions'];
	
	public function __construct() {
		// Field Access of Listing Columns
		if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
			$this->middleware(function ($request, $next) {
				$this->listing_cols = ModuleFields::listingColumnAccessScan('Admin_Support_Topics', $this->listing_cols);
				return $next($request);
			});
		} else {
			$this->listing_cols = ModuleFields::listingColumnAccessScan('Admin_Support_Topics', $this->listing_cols);
		}
	}
	
	/**
	 * Display a listing of the Admin_Support_Topics.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$module = Module::get('Admin_Support_Topics');
		
		if(Module::hasAccess($module->id)) {
			return View('la.admin_support_topics.index', [
				'show_actions' => $this->show_action,
				'listing_cols' => $this->listing_cols,
				'module' => $module
			]);
		} else {
            return redirect(config('laraadmin.adminRoute')."/");
        }
	}

	/**
	 * Show the form for creating a new admin_support_topic.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created admin_support_topic in database.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if(Module::hasAccess("Admin_Support_Topics", "create")) {
		
			$rules = Module::validateRules("Admin_Support_Topics", $request);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
			
			$insert_id = Module::insert("Admin_Support_Topics", $request);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.admin_support_topics.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Display the specified admin_support_topic.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		if(Module::hasAccess("Admin_Support_Topics", "view")) {
			
			$admin_support_topic = Admin_Support_Topic::find($id);
			if(isset($admin_support_topic->id)) {
				$module = Module::get('Admin_Support_Topics');
				$module->row = $admin_support_topic;
				
				return view('la.admin_support_topics.show', [
					'module' => $module,
					'view_col' => $this->view_col,
					'no_header' => true,
					'no_padding' => "no-padding"
				])->with('admin_support_topic', $admin_support_topic);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("admin_support_topic"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Show the form for editing the specified admin_support_topic.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if(Module::hasAccess("Admin_Support_Topics", "edit")) {			
			$admin_support_topic = Admin_Support_Topic::find($id);
			if(isset($admin_support_topic->id)) {	
				$module = Module::get('Admin_Support_Topics');
				
				$module->row = $admin_support_topic;
				
				return view('la.admin_support_topics.edit', [
					'module' => $module,
					'view_col' => $this->view_col,
				])->with('admin_support_topic', $admin_support_topic);
			} else {
				return view('errors.404', [
					'record_id' => $id,
					'record_name' => ucfirst("admin_support_topic"),
				]);
			}
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Update the specified admin_support_topic in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		if(Module::hasAccess("Admin_Support_Topics", "edit")) {
			
			$rules = Module::validateRules("Admin_Support_Topics", $request, true);
			
			$validator = Validator::make($request->all(), $rules);
			
			if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();;
			}
			
			$insert_id = Module::updateRow("Admin_Support_Topics", $request, $id);
			
			return redirect()->route(config('laraadmin.adminRoute') . '.admin_support_topics.index');
			
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}

	/**
	 * Remove the specified admin_support_topic from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		if(Module::hasAccess("Admin_Support_Topics", "delete")) {
			Admin_Support_Topic::find($id)->delete();
			
			// Redirecting to index() method
			return redirect()->route(config('laraadmin.adminRoute') . '.admin_support_topics.index');
		} else {
			return redirect(config('laraadmin.adminRoute')."/");
		}
	}
	
	/**
	 * Datatable Ajax fetch
	 *
	 * @return
	 */
	public function dtajax()
	{
		$values = DB::table('admin_support_topics')->select($this->listing_cols)->whereNull('deleted_at');
		$out = Datatables::of($values)->make();
		$data = $out->getData();

		$fields_popup = ModuleFields::getModuleFields('Admin_Support_Topics');
		
		for($i=0; $i < count($data->data); $i++) {
			for ($j=0; $j < count($this->listing_cols); $j++) { 
				$col = $this->listing_cols[$j];
				if($fields_popup[$col] != null && starts_with($fields_popup[$col]->popup_vals, "@")) {
					$data->data[$i][$j] = ModuleFields::getFieldValue($fields_popup[$col], $data->data[$i][$j]);
				}
				if($col == $this->view_col) {
					$data->data[$i][$j] = '<a href="'.url(config('laraadmin.adminRoute') . '/admin_support_topics/'.$data->data[$i][0]).'">'.$data->data[$i][$j].'</a>';
				}
				// else if($col == "author") {
				//    $data->data[$i][$j];
				// }
			}
			
			if($this->show_action) {
				$output = '';
				if(Module::hasAccess("Admin_Support_Topics", "edit")) {
					$output .= '<a href="'.url(config('laraadmin.adminRoute') . '/admin_support_topics/'.$data->data[$i][0].'/edit').'" class="btn btn-warning btn-xs" style="display:inline;padding:2px 5px 3px 5px;"><i class="fa fa-edit"></i></a>';
				}
				
				if(Module::hasAccess("Admin_Support_Topics", "delete")) {
					$output .= Form::open(['route' => [config('laraadmin.adminRoute') . '.admin_support_topics.destroy', $data->data[$i][0]], 'method' => 'delete', 'style'=>'display:inline']);
					$output .= ' <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-times"></i></button>';
					$output .= Form::close();
				}
				$data->data[$i][] = (string)$output;
			}
		}
		$out->setData($data);
		return $out;
	}
}
