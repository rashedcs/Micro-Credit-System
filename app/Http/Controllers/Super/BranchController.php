<?php
namespace App\Http\Controllers\Super;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BranchController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth:super');
	}

    public function create()
    {
        return view('super.branch');
    }
    
    public function store(Request $request)
    {
        $name = $request->input('name');
        $city = $request->input('city');
        $assests = $request->input('assests');

        $data = array("name"=>$name, "city"=>$city, "assests"=>$assests);
        DB::table('branch')->insert($data);

        session()->flash('success', 'Branch is created successfully');
        return redirect('super/branch');
    }
}