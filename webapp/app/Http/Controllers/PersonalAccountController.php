<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatePersonalAccount;
use App\Http\Requests\ValidateLogin;
use App\PersonalAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PersonalAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.signin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidatePersonalAccount $request)
    {
        $account = new PersonalAccount();
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->type = $request->type;
        $account->password = bcrypt($request->password);
        DB::transaction(function() use ($account)
        {
            $account->save();
        });

        return view('pages.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PersonalAccount  $personalAccount
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalAccount $personalAccount)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonalAccount  $personalAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalAccount $personalAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonalAccount  $personalAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalAccount $personalAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonalAccount  $personalAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalAccount $personalAccount)
    {
        //
    }
    public function authenticate(ValidateLogin $request)
    {
        $auth = PersonalAccount::where('email', '=', $request->email )->get()->first();
        if($auth->password == $request->password || $auth->email == $request->email || $auth->active == true)
        {
            $request->session()->put('user', $auth);
            //dd(session('user'));
            return view('pages.dashboard');
        }
        else
        {
            dd('nonono');
        }
    }
    public function login()
    {
        return view('pages.login');
    }
}
