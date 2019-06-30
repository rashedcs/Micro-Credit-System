<?php
namespace App\Http\Controllers\Super\Auth;
use App\Http\Controllers\Controller;
use App\Model\Super\Super;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'super/home';

    public function showLoginForm()
    {
        return view('super.auth.login');
    }
    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        return $this->sendFailedLoginResponse($request);
    }
    public function logout(Request $request)
    {
        Auth::guard('super')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'super.login' ));
    }
    public function __construct()
    {
        $this->middleware('guest:super')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('super');
    }
}