<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;


class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function loanstatus()
    {
    	$adminb = Auth::user()->branch;;
        $requests = DB::table('requests')->where('branch',$adminb)->get();

        //return view('admin/loanstatus', ['requests' => $requests]);

        $con = $requests->count();


        if($con!=0) 
        {
                return view('admin/loanstatus', ['requests' => $requests]);
        }
        else
        {
              return view('admin/nullLoan', ['name' => 'No requst found']);
        }

    }
    public function store(Request $request)
    {
        $email = $request->input('email');
        $approved = $request->input('approved');



        $info =  array("approved"=>1);
        DB::table('requests')->where('email', $email)->update($info);

        return view('admin/home');
    }
}