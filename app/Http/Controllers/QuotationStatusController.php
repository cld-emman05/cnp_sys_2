<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Quotation; // Quotation ID

class QuotationStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $quotationStatus = Quotation_Status::all();

      return view('order.index')->with('orders', $quotationStatus);
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
      $quotationStatus = new Order; //Create Order table

      $quotationStatus->user_id = \Auth::user()->id;
      $quotationStatus->status = $request->input('QuotationStatus');
      $quotationStatus->quotation_id = $request->input('Quotation');

      $quotationStatus->save();

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
      $quotationStatus = Quotation_Status::find($id);

      //return view associated
      //return view('order.view', compact('order'));
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
