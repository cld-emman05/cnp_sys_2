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
        								<th>Total Price</th>
        								<th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
      								<tr id = '1'>
        								<td>{{Carbon\Carbon::now()->format('m/d/y')}} <br>
                          {{Carbon\Carbon::now()->format('H:i:s')}}
                        </td>
        								<td>{{ $quotation->orders->title }}</td>
        								<td><a>{{ $quotation->total_amount }}</a></td>
        								<td>
        									<btn class = 'btn btn-success' id = 'approved'>Approve</btn>
                          <btn class = 'btn btn-info' id = 'change'>Change Deal</btn>
                          <btn class = 'btn btn-danger' id = 'terminated'> Terminate </btn>
                            </div>

                            </btn>
        								</td>
      								</tr>
    								</tbody>
  								</table>
              </div>
            </div>
          </div>

            </div>
          </div>
        </div>
@endsection
