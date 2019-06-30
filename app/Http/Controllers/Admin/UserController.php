<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\User\User;
use Illuminate\Http\Request;
use DB;



class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $branch = $request->user();
        //$branch = DB::table('branch')->where('name','=','$user')->get();
        return view('admin.userCreate', ['branch' => $branch]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'branch' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'balance' => 'required|integer',

        ]);
        $request['password'] = bcrypt($request->password);
        $user = user::create($request->all());
        //echo "Admin Created Successfully ";
       // return view('admin.userCreate')->with('success', 'You are successfully logged in');
        session()->flash('success', 'Here is your success message');

        return redirect('/admin/user');

       // return redirect(route('admin.home'));
     //  return redirect('/dashboard')->with('success', 'You are successfully logged in'); 

    }

}