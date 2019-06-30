<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;


class AccountController extends Controller
{
	public function accountstatus()
    {
    	//$balance = DB::table('data')->sum('balance')->where('user_id' '=' $id);

        $email = Auth::user()->email;
        $sum = DB::table('card')->where('email', $email)->sum('amount');

/*
        $request = DB::table('card')->where('email', $email);
        $con = $request->count();
        $sum=0;

        for($i=0; $i<$con; $i++) 
        {     
                $sum += 5;
        }
*/
        return view('user.accountstatus',['sum' => $sum]);
    }
    public function reqstore(Request $request)
    {
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
}


