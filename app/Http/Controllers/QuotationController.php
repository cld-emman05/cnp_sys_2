<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Quotation;
use App\QuotationStatus;
use App\Status;
use App\OrderStatus;

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
      $orders = OrderStatus::with('order')->where('phase_id', 1)->get();

      //dd($orders);
      return view('quotation.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $orders = Order::find($id);

      return view('quotation.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      $quotations = new Quotation; //Create Order table

      $quotations = DB::table('quotations')->insertGetId([
        'unit_price' => $request->input('UnitCost'),
        'total_amount' => $request->input('TotalAll'),
        'order_id' => $id,
      ]);

      $status = DB::table('quotation_statuses')->insertGetId([
        'remarks' => 'Waiting for approval!',
        'quotation_id' => $quotations,
        'status_id' => 1,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
      ]);

      return redirect('/quotation/manage')->with('success','Quote submitted!');
    }

    public function manage(){
      $quotations = QuotationStatus::with('quotations', 'status')->get(); //Create Order table

      //dd($quotations);
      return view('quotation.manage', compact('quotations'));
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

    public function approve(){
      $id = QuotationStatus::with('quotations', 'status')->where('status_id', 1)->value('id');
      $quotations = Quotation::with('quotation_status.status')->where('id', $id)->get();

      return view('quotation.approve', compact('quotations'));
    }

    public function confirmed($id){
      $quotation = QuotationStatus::where('quotation_id', $id)
                  ->update(['status_id' => 2]);

      $status = OrderStatus::where('order_id', Quotation::find($id)->order_id)->update(['phase_id' => 4]);

      $order = Quotation::find($id)->order->value('id');

    return redirect('/order/monitor-status/'.$order)->with('Quotation Approved!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $quotation = QuotationStatus::where('quotation_id', $id)
                  ->update(['status_id' => 4]);

      $status = OrderStatus::where('order_id', Quotation::find($id)->order_id)->update(['phase_id' => 2]);

    return redirect('/quotation/approve/')->with('success', 'Order has been cancelled!');
    }
}
