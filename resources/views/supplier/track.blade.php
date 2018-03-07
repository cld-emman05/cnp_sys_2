@extends('layout.main')

@section('title', "Debt Tracker")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div classA="card-header">
            <h5 class='card-category'>Supplier</h5>
            <h4 class="card-title">Debt Tracker</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card-body'>
            <div class="col-lg-12 md-4">
  							<div class="card card-chart">
  								<table class="table table-hover">
    								<thead>
      								<tr>
        								<th>Supplier</th>
        								<th>Accumulated Credit (in PhP)</th>
        								<th>Transaction</th>
      								</tr>
    								</thead>

    								<tbody>
      								<tr>
        								<td>Dhunwell</td>
        								<td>15000</td>
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

								<div class="col-sm-12 ">
									<div class="result pull-left"><strong>Showing 1 to 2 of max</strong></div>
										<ul class="pagination pull-right">
											<li><a href="#">«</a></li>
											<li class = 'active'><a href="#1">1</a></li>
											<li><a href="#2">2</a></li>
											<li><a href="#3">3</a></li>
											<li><a href="#4">4</a></li>
											<li><a href="#5">5</a></li>
											<li><a href="#2">»</a></li>
										</ul>
							</div>

            </div>
          </div>
        </div>
@endsection
