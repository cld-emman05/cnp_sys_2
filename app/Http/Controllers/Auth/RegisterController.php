<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Customer;
use App\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company' => 'string|max:255',
            'address' => 'string|max:255',
            'contact' => 'string|max:11',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
      $user = new User;
      $customer = new Customer;
      $agent = new Agent;

      $user->first_name = $request->input('first_name');
      $user->last_name = $request->input('last_name');
      $user->customer->company = $request->input('company');
      $user->customer->industry = $request->input('industry');
      $user->address = $request->input('address');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));

      $user->customer->agent_id = $agent->random();
    }
}
