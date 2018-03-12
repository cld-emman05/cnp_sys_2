@extends('layout.main')

@section('title', "Orders")

@include('headers.table')

@section('main-content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-chart">
          <div class="card-header">
          <h5 class='card-category'>Orders</h5>
            <h4 class="card-title">My Orders</h4>
          </div>

          <!-- FORM CONTENT -->
          <div class = 'card-body'>
            <div class="col-lg-12 md-4">
  							<div class="card card-chart">
  								<table class="table table-hover">
    								<thead>
                      @if(auth::user()->user_type == 1)
                      <tr>
                        <td></td><td></td><td></td><td></td>
                        <td><a href = '/order/create'>
                          <btn class = 'btn btn-primary' id = 'create'>
                          <i class="now-ui-icons ui-1_simple-add"></i> Create</btn>
                        </a></td>
                      </tr>
                      @endif

      								<tr class = 'font-weight-bold'>
        								<th>Order #</th>
        								<th>Job Title</th>
        								<th>Date of Order</th>
                        @if(auth::user()->user_type == 2 || auth::user()->user_type == 4)
                        <th>Customer</th>
                        @endif
                        <th>Status</th>
                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
      								<tr id = '1'>
        								<td>1</td>
        								<td>Job Sample</td>
                        <td> -- </td>
                        @if(auth::user()->user_type == 2 || auth::user()->user_type == 4)
                        <td>Crisostomo Ibarra</td>
                        @endif
        								<td>
                          <a href = '/order/monitor-status'
                          class = 'text-info'>
                              In Process </a></td>
                        <td>

                          @if(auth::user()->user_type == 1)
                          <a href = '/order/revise'> <btn class = 'btn btn-success' id = 'revise'>Revise</btn> </a>
                          <btn class = 'btn btn-danger' id = 'terminated'>Terminate</btn>
                          @elseif(auth::user()->user_type == 2 || auth::user()->user_type == 4)
                          <a href = '/order/view'> <btn class = 'btn btn-info' id = 'view'>View</btn> </a>
                        </td>
                        @endif
                      </tr>

                      <tr>
        								<td id = '2'>2</td>
        								<td>New order</td>
        								<td><a> -- </a></td>
                        @if(auth::user()->user_type == 2 || auth::user()->user_type == 4)
                        <td> -- </td>
                        @endif
                        <td>
                          <a href = '/order/monitor-status'
                          class = 'info-warning'>
                              Ongoing Production</btn> </a>
                        </div></td>
        								<td>
                          @if(auth::user()->user_type == 1)
                          <a href = '/order/revise'> <btn class = 'btn btn-success' id = 'revise'>Revise</btn> </a>
                          <btn class = 'btn btn-danger' id = 'terminated'>Terminate</btn>
                          @elseif(auth::user()->user_type == 2 || auth::user()->user_type == 4)
                          <a href = '/order/view'> <btn class = 'btn btn-info' id = 'view'>View</btn> </a>
                        </td>
                        @endif
      								</tr>

                      <tr>
        								<td>3</td>
        								<td>Final order</td>
        								<td><a> -- </a></td>
                        @if(auth::user()->user_type == 2 || auth::user()->user_type == 4)
                        <td> -- </td>
                        @endif
                        <td>
                          <a href = '/order/schedule'
                          class = 'info-success'>
                              Ready for Delivery</btn> </a>
                       </td>
                       <td>
                         @if(auth::user()->user_type == 1)
                         {{ Carbon\Carbon::now() }}
                         @elseif(auth::user()->user_type == 2 || auth::user()->user_type == 4)
                         <a href = '/order/schedule'> <btn class = 'btn btn-success' id = 'view'>Schedule</btn> </a>
                       </td>
                       @endif
      								</tr>

                      <tr>
        								<td>4</td>
        								<td>Void order</td>
        								<td><a> -- </a></td>
                        @if(auth::user()->user_type == 2 || auth::user()->user_type == 4)
                        <td> -- </td>
                        @endif
                        <td>
                          <a href = '/order/schedule'
                          class = 'info-danger'>
                              Rejected</btn> </a>
                       </td>
                       <td>
                         {{ Carbon\Carbon::now() }}
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
