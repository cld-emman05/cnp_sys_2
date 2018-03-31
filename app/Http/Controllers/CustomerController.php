<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\User;
use App\Industry;

use DB;

class CustomerController extends Controller
{

  /**
    * Instantiate a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers = Customer::all();

      return view('customer.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $industries = Industry::all();
      $data = json_encode($industries);

      return view('customer.register', [
        'industries' => json_decode($data, true),
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = new User;
      $customer = new Customer;

      $user = DB::table('users')->insertGetId([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'address' => $request->input('address'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
      ]);

      $customer = DB::table('customer')->insert([
        'company' => $request->input('company'),
        'industry_id' => $request->input('industry_id'),
        'user_id' => $user,
        'agent_id' => \Auth::user()->employee()->agent->id,
      ]);

      return redirect('/customer')->with('success', 'New Customer Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
