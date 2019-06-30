<?php
namespace App\Http\Controllers\Super;
use App\Http\Controllers\Controller;
use App\Model\Admin\Admin;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:super');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$branch = DB::table('branch')->get();
        //return view('admin/loanstatus', , ['branch' => $branch];
        return view('super.adminCreate', ['branch' => $branch]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'branch' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        $request['password'] = bcrypt($request->password);
        $user = admin::create($request->all());
        //echo "Admin Created Successfully ";
       // return view('admin.userCreate')->with('success', 'You are successfully logged in');
        session()->flash('success', 'Admin Created Successfully');

        return redirect('/super/register');

       // return redirect(route('admin.home'));
     //  return redirect('/dashboard')->with('success', 'You are successfully logged in'); 

    }

}