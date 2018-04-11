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
                        <th>Salesman</th>
        								<th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      @foreach($orders as $order)
                      <tr id = '{{ $order->id }}'>
        								<td> {{ $order->id }} </td>
        								<td> {{ $order->title }} </td>
        								<td>{{ $order->customer->user->first_name }} {{ $order->customer->user->last_name }}</td>
                        <td> {{ $order->customer->agent->employee->user->first_name }} {{ $order->customer->agent->employee->user->last_name }} </td>
        								<td>
        									<a href = 'quotation/create'><btn class = 'btn btn-primary'>Create Quotation</btn></a>
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
