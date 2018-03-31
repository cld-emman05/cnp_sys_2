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
            <div class="col-md-12 pr-2">
  							<div class="card card-chart">

                  <div class = 'container'>
                  <div class="col align-self-end">
                        <a href = '/order/create'>
                          <btn class = 'btn btn-primary' id = 'create'>
                          <i class="now-ui-icons ui-1_simple-add"></i> Create</btn>
                        </a>
                    </div>

                  </div>

  								<table class="table table-hover" id= 'print-table'>
    								<thead>
                      <tr>
        								<th>Order #</th>
        								<th>Job Title</th>
        								<th>Date of Order</th>
                        @if(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
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
                        @if(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
                        <td>Crisostomo Ibarra</td>
                        @endif
        								<td>
                          <a href = '/order/monitor-status'
                          class = 'text-info'>
                              In Process </a></td>
                        <td>

                          @if(@session()->get('dept') == null)
                          <a href = '/order/revise'> <btn class = 'btn btn-success' id = 'revise'>Revise</btn> </a>
                          <btn class = 'btn btn-danger' id = 'terminated'>Terminate</btn>
                          @elseif(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
                          <a href = '/order/view'> <btn class = 'btn btn-info' id = 'view'>View</btn> </a>
                        </td>
                        @endif
                      </tr>

                      <tr>
        								<td id = '2'>2</td>
        								<td>New order</td>
        								<td><a> -- </a></td>
                        @if(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
                        <td> -- </td>
                        @endif
                        <td>
                          <a href = '/order/monitor-status'
                          class = 'info-warning'>
                              Ongoing Production</btn> </a>
                        </div></td>
        								<td>
                          @if(@session()->get('dept') == null)
                          <a href = '/order/revise'> <btn class = 'btn btn-success' id = 'revise'>Revise</btn> </a>
                          <btn class = 'btn btn-danger' id = 'terminated'>Terminate</btn>
                          @elseif(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
                          <a href = '/order/view'> <btn class = 'btn btn-info' id = 'view'>View</btn> </a>
                        </td>
                        @endif
      								</tr>

                      <tr>
        								<td>3</td>
        								<td>Final order</td>
        								<td><a> -- </a></td>
                        @if(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
                        <td> -- </td>
                        @endif
                        <td>
                          <a href = '/order/schedule'
                          class = 'info-success'>
                              Ready for Delivery</btn> </a>
                       </td>
                       <td>
                         @if(@session()->get('dept') == null)
                         {{ Carbon\Carbon::now() }}
                         @elseif(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
                         <a href = '/order/schedule'> <btn class = 'btn btn-success' id = 'view'>Schedule</btn> </a>
                       </td>
                       @endif
      								</tr>

                      <tr>
        								<td>4</td>
        								<td>Void order</td>
        								<td><a> -- </a></td>
                        @if(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
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
