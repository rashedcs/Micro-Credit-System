<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use DB;


class RechargeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
    public function request()
    {
        $request = DB::table('recharge')->get(); //, ['requests' => $request]
        return view('user.recharge' , ['requests' => $request]);
    }

    public function reqstore(Request $request)
    {

    	  $card = $request->input('card');
        $email = $request->user()->email;

       //$flag   = DB::table('card')->where('card', $card)->first()->card;
       //$ant  = DB::table('recharge')->where('card', $card)->first();

       $car = DB::table('recharge')->where('card', $card)->value('card');
       $check = DB::table('recharge')->where('card', $card)->value('check');

       //$flag = $ant->check;


        if($check==false && $card==$car)
        {
            $amount = DB::table('recharge')->where('card', $card)->value('amount');

            $info =  array("check"=>true);
            DB::table('recharge')->where('card', $card)->update($info);


            $data = array("card"=>$card, "email"=>$email, "amount"=>$amount);
            DB::table('card')->insert($data);

            session()->flash('success', 'Recharge Successfully');
            return redirect('/recharge');
        }
        else
        {
                        session()->flash('success', 'Already Used or Wrong Card');
            return redirect('/recharge');
        }
    }
}



        /*  

    public static function updateData($card, $info)
      {
            DB::table('recharge')->where('card', $card)->update($info);
      }

        if($card!=$temp->card)
        {
        //DB::table('recharge')->where('card', $card)->update('check',true);
            //DB::table('recharge')->updateOrInsert('card', $card);
           // $info = array("check"=>true);
           // updateData($card, $info);
           //DB::table('recharge')->insert($answer);

            $amount = $temp->amount;
            $data = array("card"=>$card, "email"=>$email, "amount"=>$amount);
            DB::table('card')->insert($data);

            session()->flash('success', 'Recharge Successfully');

            return redirect('/recharge');
        }
        */