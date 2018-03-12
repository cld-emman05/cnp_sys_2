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
          <div class = 'card-body'>
            <div class="col-lg-12 md-4">
  							<div class="card card-chart">
  								<table class="table table-hover">
    								<thead>
      								<tr>
        								<th>Quote #</th>
        								<th>Job Title</th>
        								<th>Agent</th>
        								<th>Job Price</th>
        								<th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
      								<tr id = '1'>
        								<td>1</td>
        								<td>Job Sample</td>
        								<td><a>Crisostomo Ibarra</a></td>
        								<td><a>PhP 30.00</a></td>
        								<td>
        									<btn class = 'btn btn-success' id = 'approved'>Approve</btn>
        									<btn class = 'btn btn-primary nav-item dropdown-toggle' href="#pablo" id="navbarDropdownMenuLink" data-toggle="dropdown">Reject

                            <div class = "dropdown-menu px-2">
                              <a class = 'btn btn-info' href = '#' id = 'haggle'> Haggle (3) </a>
                              <a class = 'btn btn-danger' href = '#' id = 'terminated'> Terminate </a>
                            </div>

                            </btn>
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
