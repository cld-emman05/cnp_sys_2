@extends('layout.main')

@section('title', "Manage Quotations")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Quotations</h5>
            <h4 class="card-title">Requests</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card card-body'>
            <div class="col-lg-12 md-4">

                <div class="card-chart">
  								<table class="table stripe" id = 'format-table'>
    								<thead>
      								<tr>
        								<th>Quote #</th>
        								<th>Title</th>
        								<th>Customer</th>
        								<th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      @foreach($orders as $order)
                      <tr id = '{{ $order->id }}'>
        								<td> {{ $order->order->id }} </td>
        								<td> {{ $order->order->title }} </td>
        								<td>{{ $order->order->customer->company }}</td>
        								<td>
                          <form method="GET" action = "/quotation/create/{{$order->id}}">
                            <button class = 'btn btn-primary' id = 'create'> Create Quotation </button> </a>
                          </form>
        								</td>
      								</tr>
                      @endforeach
    								</tbody>
  								</table>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
@endsection
