<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Order;
use App\Specification;
use App\Size; // size
use App\PaperType;
use App\CoverPaper; // cover_id
use App\InsidePaper; // inside_id
use App\Color;
use App\LaminationType; // lamination
use App\BindingType; // binding_type_id

use App\Customer;
use App\User;
use App\Phase;
use App\OrderStatus;

class OrderController extends Controller
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
      $sizes = Size::all();
      $inside_papers = InsidePaper::with('paper_type')->get();
      $cover_papers = CoverPaper::with('paper_type')->get();
      $colors = Color::all();
      $laminations = LaminationType::all();
      $bindings = BindingType::all();

        return view('order.create',compact('specifications', 'sizes',
                                            'inside_papers', 'cover_papers',
                                            'colors', 'laminations', 'bindings'));
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

      $specs = DB::table('specifications')->insertGetId([
        'type' => $request->input('job_type'),
        'pages' => $request->input('page_count'),
        'size_id' => $request->input('size'),
        'cover_paper_id' => $request->input('cover_paper'),
        'cover_color_id' => $request->input('cover_color'),
        'inside_paper_id' => $request->input('inside_paper'),
        'inside_color_id' => $request->input('inside_color'),
        'lamination_id' => $request->input('lamination'),
        'binding_id' => $request->input('binding'),
      ]);

      $order = DB::table('orders')->insertGetId([
        'title' => $request->input('job_name'),
        'quantity' => $request->input('quantity'),
        'due_date' => $request->input('quantity'),
        'comments' =>
        'delivery_date' => null,
        'customer_id', =>
        'specification_id', =>
        'file_id' => null,
      ]);

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
