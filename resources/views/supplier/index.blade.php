@extends('layout.main')

@section('title', "Supplier List")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Suppliers</h5>
            <h4 class="card-title">Contact</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card-body'>
            <div class="col-lg-12 md-4">
  							<div class="card card-chart">
  								<table class="table table-hover">
    								<thead>
                      <tr>
                        <td></td><td></td><td></td><td></td><td></td>
                        <td><a href = '/supplier/register'>
                          <btn class = 'btn btn-primary' id = 'create'>
                          <i class="now-ui-icons ui-1_simple-add"></i> Add</btn>
                        </a></td>
                      </tr>
      								<tr>
        								<th>Supplier #</th>
        								<th>Supplier Name</th>
        								<th>Credit Limit</th>
                        <th>Terms</th>
        								<th>Contact #</th>
                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      <tr>
        								<td>1</td>
        								<td>Dhunwell</td>
        								<td><a>PhP 30000000</a></td>
                        <td><a>30 days</a></td>
        								<td>09221168711</i></td>
        								<td>
                          <btn class = 'btn btn-warning' id = 'approved'>Update</btn>
                          <btn class = 'btn btn-danger' id = 'terminated'>Remove</btn>
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
