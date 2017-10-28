<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Dataables\Facades\Datatables;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function view()
    {
        //$userList = User::orderBy('id', 'ASC')-> paginate(1);
        return view('admin.view');
            //->with('users', $userList);
    }

    public function get_dataTable()
    {
        return datatables()->eloquent(User::query())->toJson();
    }
}
