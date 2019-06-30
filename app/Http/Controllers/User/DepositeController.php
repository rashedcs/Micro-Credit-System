<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;


class DepositeController extends Controller
{
	public function request()
    {

    	return view('user/deposite');
    }
    public function store(Request $request)
    {
    	$email = $request->input('email');
        $branch = $request->input('branch');
        $month = $request->input('month');
        $year = $request->input('year');
		$amount = $request->input('amount');

		 $check = DB::table('deposite')->where('email',$email)->first();


		 if($check->month && $check->year)
		 {
		 	    session()->flash('success', 'You alreday deposite');
		 	    return redirect('/deposite');
		 }
		 else
		 {
		 		$data = array("email"=>$email, "month"=>$month, "year"=>$year, "branch"=>$branch, "amount"=>$amount);
				DB::table('deposite')->insert($data);

			    session()->flash('success', 'Deposite Successfully');

				return redirect('/deposite');
		 }
    }
}


