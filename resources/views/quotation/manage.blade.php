@extends('layout.main')

@section('title', "Manage Quotations")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Quotations</h5>
            <h4 class="card-title">Manage Ongoing</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card card-body'>
            <div class="col-lg-12 md-4">

                <div class="card-chart">
  								<table class="table-striped" id = 'format-table'>
    								<thead>
      								<tr>
        								<th>Quote #</th>
        								<th>Title</th>
        								<th>Customer</th>
                        <th>Salesman</th>
                        <th>Status</th>
                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      @foreach($quotations as $quotation)
                      <tr id = '{{ $quotation->quotations->id }}'>
        								<td> {{ $quotation->quotations->id }} </td>
        								<td> {{ $quotation->quotations->order->title }} </td>
        								<td>{{ $quotation->quotations->order->customer->company }}</td>
                        <td> {{ $quotation->quotations->order->customer->agent->employee->user->first_name }} {{ $quotation->quotations->order->customer->agent->employee->user->last_name }} </td>
                        <td>{{ $quotation->status->status }}</td>
                        <td>
                          @if($quotation->status->id < 2)
                           {{ $quotation->remarks }}

                           @elseif($quotation->status->id == 3)
                           <button class = 'btn btn-warning' id = 'update'> Update </button>
                           @endif
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
