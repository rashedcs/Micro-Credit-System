<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;


class LoanController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
    public function request()
    {
    	return view('user/request');
    }
    public function reqstore(Request $request)
    {
    	/*$user = DB::select("select * from request where name='{{ Auth::user()->name }}' ");*/
    	$name = $request->input('name');
    	$email = $request->input('email');
        $branch = $request->input('branch');

		$des = $request->input('description');
		$amount = $request->input('amount');

		$data = array("name"=>$name, "email"=>$email, "description"=>$des, "branch"=>$branch, "amount"=>$amount);
		DB::table('requests')->insert($data);

	    session()->flash('success', 'Data Created Successfully');

		return redirect('/request');
    }
    public function loanstatus()
    {
        /* 
          $status = DB::table('request')->where('email', '=','Auth::user()->email')->get();
          return redirect('/loanstatus',compact('status'));
        */
        $name = Auth::user()->name;
        $request = DB::table('requests')->where('name', $name)->get();
        return view('user.loanstatus', ['request' => $request]);

        /*
                $request = DB::table('requests')->get();
        return view('user/loanstatus', ['requests' => $request]);
        */

    }
}


/*
Request $request
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddressRequest;
use AvoRed\Framework\Models\Database\Address;
*/