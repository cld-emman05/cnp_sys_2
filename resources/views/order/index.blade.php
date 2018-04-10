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

            @if(session()->get('dept') == null)
              <div class="col-md-12 md-4">
              <a href = '/order/create'>
                <btn class = 'btn btn-primary' id = 'create'>
                <i class="now-ui-icons ui-1_simple-add"></i> Create</btn>
              </a>
            </div>
            @endif


                <div class="card-chart">
  								<table class="table stripe" id ='format-table'>
    								<thead>
                      <tr>
        								<th>Timestamp</th>
        								<th>Title</th>
                        @if(session()->get('dept') == 'Sales' || session()->get('dept') == 'Production')
                        <th>Customer</th>
                        @endif
                        @if(session()->get('dept') == 'Production')
                        <th> Agent </th>
                        @endif
                        @if(session()->get('dept') == 'Sales' || session()->get('dept') == null)
                        <th>Price</th>
                        <th>Status</th>
                        @endif
                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      @foreach($orders as $order)
      								<tr id = '{{ $order->id }}'>
        								<td> {{ $order->status->pluck('created_at')->first()->format('m/d/Y') }} <br>
                         {{ $order->status->pluck('created_at')->first()->format('H:i:s') }} </td>

                        <td> {{$order->title}} </td>
                        @if(session()->get('dept') == 'Sales' || session()->get('dept') == 'Production')
                        <td>{{ $order->customer->user->first_name }} {{ $order->customer->user->last_name }}</td>
                        @endif

                        @if(session()->get('dept') == 'Production')
                        <td> {{ $order->customer->agent->employee->user->first_name }} {{ $order->customer->agent->employee->user->last_name }} </td>
                        @endif

                        @if(session()->get('dept') == 'Sales' || session()->get('dept') == null)
                        <td>
                        </td>

                        <td>
                        </td>
                        @endif

                        <td>


                            @if(session()->get('dept') == null)
                              <btn class = 'btn btn-warning' id = 'revise'>Revise</btn>
                              <a href= '/order/revise'><btn class = 'btn btn-danger' id = 'terminated'>Terminate</btn></a>
                            @elseif(session()->get('dept') == 'Sales' || session()->get('dept') == 'Production')
                              <a href = '/order/view'> <btn class = 'btn btn-primary' id = 'view'>View</btn> </a>
                            @endif

                            @if(session()->get('dept') == null || session()->get('dept') == 'Sales')
                             <a href = '/order/monitor-status'> <btn class = 'btn btn-info' id = 'view'>Status</btn> </a>
                            @elseif(session()->get('dept') == 'Production')
                              <a href = '/order/to-do'> <btn class = 'btn btn-warning' id = 'view'>Manage</btn> </a>
                            @endif

                              @if(session()->get('dept') == null)
                                 <a href = '/order/schedule'> <btn class = 'btn btn-success' id = 'view'>Delivery</btn> </a>
                              @elseif(session()->get('dept') == 'Sales')
                                <a href = '/order/schedule'> <btn class = 'btn btn-success' id = 'view'>Schedule</btn> </a>
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
