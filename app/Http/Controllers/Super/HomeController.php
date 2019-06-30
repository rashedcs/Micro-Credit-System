<?php
namespace App\Http\Controllers\Super;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
	 public function __construct()
	 {
	    $this->middleware('auth:super');
	 }
    public function index()
    {
    	return view('super/home');
    }
    public function profile()
    {
    	return view('super/profile');
    }
}