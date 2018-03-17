<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Job_Orders;
use App\Job_Type; //Job type ID
use App\File_Name; //File name ID
use App\User; // User ID
use App\Quotation; // Quotation ID

class JobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobOrders = Job_Orders::all();

      return view('order.index')->with('orders', $jobOrders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $jobOrder = new jobOrder; //Create Order table

      $jobOrder->user_id = \Auth::user()->id;
      $jobOrder->name = $request->input('jobName');
      $jobOrder->comments = $request->input('comment');


      $jobOrder->job_type_id = $request->input('jobType');
      $jobOrder->file_id = $request->input('fileName');
      $jobOrder->user_id = $request->input('user');
      $jobOrder->quotation_id = $request->input('quotation');

      $order->save();

      //return redirect('directory of view')->with('condition', 'what happened');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $jobOrder = Job_Orders::find($id);

      //return view associated, to be changed
      return view('order.view', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('order.revise', compact('order'));
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
