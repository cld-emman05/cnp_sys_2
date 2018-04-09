@extends('layout.main')

@section('title', "Debt Tracker")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
            <h5 class='card-category'>Supplier</h5>
            <h4 class="card-title">Debt Tracker</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card card-body'>
            <div class="col-lg-12 md-4">
              
  							<div class="card-chart">
  								<table class="table stripe" id = 'format-table'>
    								<thead>
      								<tr>
        								<th>Supplier</th>
        								<th>Accumulated Credit</th>
        								<th>Transaction</th>
      								</tr>
    								</thead>

    								<tbody>
      								<tr>
        								<td>Dhunwell</td>
        								<td>PhP 15000</td>
        								<td>
        									<btn class = 'btn btn-success'>Pay</btn>
        									<btn class = 'btn btn-primary'>Details</btn>
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
