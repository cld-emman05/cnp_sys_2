<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Order;
use App\Specification;
use App\Size; // size
use App\CoverPaper; // cover_id
use App\InsidePaper; // inside_id
use App\Color;
use App\LaminationType; // lamination
use App\BindingType; // binding_type_id

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = Order::all();

      return view('order.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $specifications = Specification::all();
      $data_specs = json_encode($specifications);

      $size = Size::all();
      $data_size = json_encode($size);

      $inside_paper = InsidePaper::all();
      $data_inside = json_encode($inside_paper);

      $cover_paper = CoverPaper::all();
      $data_cover = json_encode($cover_paper);

      $color = Color::all();
      $data_color = json_encode($color);

      $lamination = LaminationType::all();
      $data_lam = json_encode($lamination);

      $binding = BindingType::all();
      $data_bind = json_encode($binding);


        return view('order.create',
                                  [
                                   'specifications' =>json_decode($data_specs, true),
                                   'sizes' => json_decode($data_size , true),
                                   'inside_papers' => json_decode($data_inside, true),
                                   'cover_papers' => json_decode($data_cover, true),
                                   'colors' => json_decode($data_color, true),
                                   'laminations' => json_decode($data_lam, true),
                                   'bindings' => json_decode($data_bind , true),
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
      $order = new Order;
      $specs = new Specification;
      $size = new Size; // size
      $cover_paper = new Cover_Paper; // cover_id
      $inside_paper = new Inside_Paper; // inside_id
      $cover_color = new Color;
      $inside_color = new Color;
      $lamination = new Lamination_Types; // lamination
      $bind = new Binding_Types; // binding_type_id

      $order->customer_id = \Auth::user()->id;
      $order->title = $request->input('job_name');

      $order->quantity = $request->input('quantity');
      $order->page_count = $request->input('page_count');
      $order->date_due = $request->input('date_due');
      $order->file = $request->input('myFile');
      $order->comments = $request->input('comments');

      $order->Specification_id = $request->input('Specification');
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
