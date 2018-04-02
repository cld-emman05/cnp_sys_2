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
          <div class = 'card card-body'>
            <div class="col-md-12 md-4">

              <div class="col-md-12 md-4">
              <a href = '/order/create'>
                <btn class = 'btn btn-primary' id = 'create'>
                <i class="now-ui-icons ui-1_simple-add"></i> Create</btn>
              </a>
            </div>


                <div class="card-chart">
  								<table class="table stripe" id ='format-table'>
    								<thead>
                      <tr>
        								<th>Timestamp</th>
        								<th>Job Title</th>
                        @if(@session()->get('dept') == 'Sales' || @session()->get('dept') == 'Production')
                        <th>Customer</th>
                        @endif
                        <th>Price</th>
                        <th>Status</th>
                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
      								<tr id = '1'>
        								<td>{{Carbon\Carbon::now()->format('m/d/Y')}} <br>
                            {{Carbon\Carbon::now()->format('H:i:m')}} </td>
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
                          <a href = '/order/schedule'> <btn class = 'btn btn-info' id = 'view'>View</btn> </a>
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
                        --
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
