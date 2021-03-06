<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function showLoginForm()
     {
         return view('auth.admin-login');
     }

     public function login(Request $request)
     {
       //coba login
       if ( Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {
         return redirect()->intended(route('admin.dashboard'));
       }
       return redirect()->back()->withInput($request->only('email','remember'));

       //

     }

}
