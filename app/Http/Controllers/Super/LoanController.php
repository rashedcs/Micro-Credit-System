<?php
namespace App\Http\Controllers\Super;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;



class LoanController extends Controller
{

    public function loanstatus()
    {
        $requests = DB::table('requests')->where('approved',2)->get();

        $con = $requests->count();


        if($con!=0) 
        {
                return view('super/loanstatus', ['requests' => $requests]);
        }
        else
        {
               return view('super/nullStatus', ['name' => 'No requst found']);
        }

    }
    public function store(Request $request)
    {
        $email = $request->input('email');
        $approved = $request->input('approved');



        $info =  array("approved"=>2);
        DB::table('requests')->where('email', $email)->update($info);

        return view('super/home');
    }
}