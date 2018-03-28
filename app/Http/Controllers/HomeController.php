<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //try{
      $current = Auth::user()->id;

      $user = DB::table('departments')
                  ->join('employees', 'employees.department_id', '=', 'departments.id')
                  ->join('users', 'employees.user_id', '=', 'users.id')
                  ->select('departments.name')
                  ->where('users.id', '=', $current)->value('departments.name');

        return view('dashboard.'.$user);
      //}

      /*catch(\Exception $e){
        return view('dashboard.Customer');
      }*/

      dd($user);
    }
}
