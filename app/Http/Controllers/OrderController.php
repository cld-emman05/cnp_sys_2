<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Job_Orders;
use App\Job_Type;
use App\Specs;
use App\Size_Types; // size
use App\Cover_Specs; // cover_id
use App\Inside_Specs; // inside_id
use App\Lamination_Types; // lamination
use App\Binding_Types; // binding_type_id

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = Job_Orders::all();

      return view('order.index')->with('orders', $orders);
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
      $order = new Order;
      $specs = new Specs;
      $size = new Size_Types; // size
      $cover = new Cover_Specs; // cover_id
      $inside = new Inside_Specs; // inside_id
      $lamination = new Lamination_Types; // lamination
      $bind = new Binding_Types; // binding_type_id

      $order->user_id = \Auth::user()->id;
      $order->name = $request->input('job_name');

      $order->quantity = $request->input('quantity');
      $order->page_count = $request->input('page_count');
      $order->date_due = $request->input('date_due');
      $order->file = $request->input('myFile');
      $order->comments = $request->input('comments');

      $order->job_type_id = $request->input('job_type');
      $order->type->specs->cover_specs->paper_type_id = $request->input('cover_paper');
      $order->type->specs->cover_specs->paper_color_id = $request->input('cover_color');
      $order->type->specs->inside_specs->paper_type_id = $request->input('inside_paper');
      $order->type->specs->inside_specs->paper_color_id = $request->input('inside_color');
      $order->specs->lamination_id = $request->input('lamination');
      $order->specs->binding_id = $request->input('binding');
      $order->specs->size_type_id = $request->input('size');

      $order->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $order = Job_Order::find($id);

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
        return view('order.revise', compact('order'));
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
