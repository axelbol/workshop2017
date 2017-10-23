<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EmployeeLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:employee', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        return view('auth.employee-login');
    }

    public function login(Request $request)
    {
        //Validate the form data
        $this->validate($request, [
            'email'		=>	'required|email',
            'password'	=>	'required|min:6'
        ]);

        //Attemp to log the user in
        if(Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            //if successful, then redirect  to their intended location
            return redirect()->intended(route('employee.dashboard'));
        }

        //if unsuccessful, then rediret back to the login page with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('employee')->logout();

        return redirect('/');
    }
}
