<?php
namespace App\Http\Controllers\Super;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;




class RechargeController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth:super');
	}

    public function create()
    {
        return view('super.recharge');
    }
    public function store(Request $request)
    {
        $card = $request->input('card');
        $amount = $request->input('amount');
        $check = $request->input('check');

        //$count = DB::table('recharge')->count();
        $articles = DB::table('recharge')->get();
        $answer = array();
        $flag = 0;

        for($i=0; $i<$card; $i++) 
        {     
                   $num = mt_rand(10000000,99999999);

                   foreach ($articles as $article)
                   {
                         if($num==$article->card)
                         {
                            $flag = 1;
                            break;
                         }
                   }
   
                  if($flag==0)
                  {
                      $answer[] = [
                        'card' => $num,
                        'amount' => $amount,
                        'check' => false,
                      ];
                  }

        }
        DB::table('recharge')->insert($answer);

        //$data = array("card"=>$card, "amount"=>$amount, "check"=>$check);

        session()->flash('success', 'Recharge is created successfully');
        return redirect('super/recharge');
    }
}