<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory;

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
    public function index(Request $request)
    {
      $orders = Order::with('status.phase')->get();

      return view('order.index', compact('orders')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $orders = Order::all();
      $specifications = Specification::all();
      $sizes = Size::all();
      $inside_papers = InsidePaper::with('paper_type')->get();
      $cover_papers = CoverPaper::with('paper_type')->get();
      $colors = Color::all();
      $laminations = LaminationType::all();
      $bindings = BindingType::all();

        return view('order.create', compact('orders', 'specifications', 'sizes',
                                            'inside_papers', 'cover_papers',
                                            'colors', 'laminations', 'bindings'));
    }

    public function assignSpecs(Request $request){
      $specs = Specification::where('type', $request->type)->get();

      return response()->json($specs);
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
      $order_status = new OrderStatus;

      $specs = DB::table('specifications')->insertGetId([
        'type' => $request->input('jobtype'),
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
        'due_date' => $request->input('date_due'),
        'comments' => $request->input('comments'),
        'delivery_date' => null,
        'customer_id' => DB::table('customers')->select('customers.id')
                                          ->join('users', 'users.id', '=', 'customers.user_id')
                                          ->where('users.id', '=', session()->get('current'))->value('id'),
        'specification_id' => $specs,
        'file_id' => null,
      ]);

      $order_status = DB::table('order_statuses')->insert([
        'remarks' => null,
        'order_id' => $order,
        'phase_id' => 1,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
      ]);

      return redirect('/order/')->with('success', "Order created");

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
