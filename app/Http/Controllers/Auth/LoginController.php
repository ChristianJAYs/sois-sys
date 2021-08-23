<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;


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
    protected $redirectTo = RouteServiceProvider::HOME;
        protected function redirectTo(){
            if(Auth()->user()->role_id == 3 && Auth()->user()->position_id == 0){
                return route('admin.dashboard');
            }
            else if (Auth()->user()->role_id == 2 && Auth()->user()->position_id == 1) {
                return redirect()->route('studentaffairs.dashboard');
            }
            else if (Auth()->user()->role_id = 1 && Auth()->user()->position_id == 2) {
                return route('president.dashboard');
            }
            else if (Auth()->user()->role_id = 1 && Auth()->user()->position_id == 3) {
                return route('vice-president.dashboard');
            }
            else if (Auth()->user()->role_id = 1 && Auth()->user()->position_id == 4) {
                return route('secretary.dashboard');
            }
            else if (Auth()->user()->role_id = 1 && Auth()->user()->position_id == 5) {
                return route('treasurer.dashboard');
            }
            else if (Auth()->user()->role_id = 1 && Auth()->user()->position_id == 6) {
                return route('auditor.dashboard');
            }
            else if (Auth()->user()->role_id = 1 && Auth()->user()->position_id == 7) {
                return route('representative.dashboard');
            }
            else if (Auth()->user()->role_id = 1 && Auth()->user()->position_id == 8) {
                return route('members.dashboard');
            }
            else{
                return "/";
                // dd(Auth()->user()->role_id);
                // $user = Auth::user();
                // dd($user);
            };
        }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email'=>'required|email',
            'student_number'=>'required',
            'password'=>'required',
        ]);

        if (Auth()->attempt(array('email'=>$input['email'], 'student_number'=>$input['student_number'], 'password'=>$input['password']))) {
            if (Auth()->user()->role_id == 3 && Auth()->user()->position_id == 0) {
                return redirect()->route('admin.dashboard');
            }
            elseif (Auth()->user()->role_id == 2 && Auth()->user()->position_id == 1) {
                return redirect()->route('studentaffairs.dashboard');
            }
            elseif (Auth()->user()->role_id == 1 && Auth()->user()->position_id == 2) {
                return redirect()->route('president.dashboard');
            }
            elseif (Auth()->user()->role_id == 1 && Auth()->user()->position_id == 3) {
                return redirect()->route('vice-president.dashboard');
            }
            elseif (Auth()->user()->role_id == 1 && Auth()->user()->position_id == 4) {
                return redirect()->route('secretary.dashboard');
            }
            elseif (Auth()->user()->role_id == 1 && Auth()->user()->position_id == 5) {
                return redirect()->route('auditor.dashboard');
            }
            elseif (Auth()->user()->role_id == 1 && Auth()->user()->position_id == 6) {
                return redirect()->route('treasurer.dashboard');
            }
            elseif (Auth()->user()->role_id == 1 && Auth()->user()->position_id == 7) {
                return redirect()->route('representative.dashboard');
            }
            elseif (Auth()->user()->role_id == 1 && Auth()->user()->position_id == 8) {
                return redirect()->route('members.dashboard');
            }
        }
        else{
            return redirect()->route('login')->with('error','Emails and password are incorrect');
            // dd(Auth()::user()->role_id);
            // $user = Auth::user();
            // dd($user);
            // print_r($user);
        }
    }
}
