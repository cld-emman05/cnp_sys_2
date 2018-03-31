<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Employee;
use App\User;

use DB;

class EmployeeController extends Controller
{
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
      $employees = Employee::all();

      return view('employee.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $departments = Department::all();
      $data = json_encode($departments);

      return view('employee.register', [
        'departments' => json_decode($data, true),
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
      $employee = new Employee;

      $user = DB::table('users')->insertGetId([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'address' => $request->input('address'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
      ]);

      $employee = DB::table('employees')->insertGetId([
        'flag' => 1,
        'user_id' => $user,
        'department_id' => $request->input('user_type'),
      ]);

      if(App\Employee::find('department_id')->get() == 2){
        $agent = DB::table('agents')->insert([
          'employee_id' => $employee,
          'user_id' => $user,
        ]);
      }


      return redirect('/employee')->with('success', "New Employee!");
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
