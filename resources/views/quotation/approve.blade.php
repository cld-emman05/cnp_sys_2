@extends('layout.main')

@section('title', "Approve Quotation")

@include('headers.quotation')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Quotations</h5>
            <h4 class="card-title">Approval</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card card-body'>
            <div class="col-lg-12 md-4">

  							<div class="card-chart">
  								<table class="table stripe" id = 'format-table'>
    								<thead>
      								<tr>
        								<th>Timestamp</th>
        								<th>Title</th>
                        <th>Unit Price</th>
        								<th>Total Price</th>
        								<th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      @foreach($quotations as $quotation)
      								<tr id = '{{ $quotation-> id }}'>
        								<td>{{ $quotation->quotation_status->first()->updated_at->format('m/d/y')}} <br>
                          {{ $quotation->quotation_status->first()->updated_at->format('H:i:s')}}
                        </td>
        								<td>{{ $quotation -> order->title }}</td>
                        <td class = 'number'> PhP {{ $quotation -> unit_price }} </td>
                        <td class = 'number'> PhP {{ $quotation -> total_amount }} </td>
        								<td>
                          <form method="POST" action = "/quotation/confirmed/{{$quotation->id}}">
                            {{ csrf_field() }}
        									  <button type = 'submit' class = 'btn btn-success' id = 'approved'>Approve</button>
                          </form>

                          <btn class = 'btn btn-info' id = 'change'>Change Deal</btn>

                          <form method="POST" action = "/quotation/destroy/{{$quotation->id}}">
                            {{ csrf_field() }}
                          <button class = 'btn btn-danger' id = 'terminated'> Terminate </button>
                        </form>
                            </div>

                            </btn>
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
