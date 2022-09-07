<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Models\admin\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $this->validateLogin($request);


        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return $this->sendLoginResponse($request);
        }

    

        return $this->sendFailedLoginResponse($request);
    }

    protected function credentials(Request $request)
    {
       
        $admin = admin::where('email',$request->email)->first();
        if (count((array)$admin)) {

            if($admin->status == 0){
                return ['email'=>'inactive', 'password'=>'you are not activated please contact admin'];
            }else{
                 return ['email'=>$request->email, 'password'=>$request->password,'status'=>1];
            }

        }
        return $request->only($this->username(), 'password');
       
    }


    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    
    protected function guard()
    {
        return Auth::guard('admin');
    }

}
