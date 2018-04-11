<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Quotation;
use App\QuotationStatus;
use App\Status;

use DB;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = Order::with('quotation.quotation_status.status')->get();

      return view('quotation.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $order = Order::find(1);
        return view('quotation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $quotation = new Quotation; //Create Order table

      $quotation->unit_price = $request->input('UnitCost');
      $quotation->total_amount = $request->input('TotalAll');

      $quotation->save();
     $data = array(
       'UnitCost'=> $a,
       'TotalAll'=> $b
     );

     $quotation_status = DB::table('quotation_statuses')->insert([
       'updated_at' => \Carbon\Carbon::now(),
     ]);
      //return redirect('directory of view')->with('condition', 'what happened');
      DB::table('quotations')->insert($data);
      DB::table('quotation_statuses')->insert($data);
      return redirect('quotations')->with('success','Quote submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $quotation = Quotation::find($id);

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
