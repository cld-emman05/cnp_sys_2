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
          <div class = 'ext-right'>
              <div class="col-md-2 pl-1">
                <form method="GET" action = "/order/create">
                <button type = 'submit' class = 'btn btn-primary' id = 'create'>
                <i class="now-ui-icons ui-1_simple-add"></i> Create</button>
            </div>
          </div>
            @endif

                <div class="card-chart">
  								<table class="table-striped" id ='format-table'>
    								<thead>
                      <tr>
        								<th class = 'td-actions text-center'>Timestamp</th>
        								<th class = 'td-actions text-center'>Title</th>
                        <th class = 'td-actions text-center'>Type</th>
                        @if(session()->get('dept') == 'Sales' || session()->get('dept') == 'Production')
                        <th class = 'td-actions text-center'>Customer</th>
                        @endif
                        @if(session()->get('dept') == 'Production')
                        <th class = 'td-actions text-center'> Agent </th>
                        @endif
                        @if(session()->get('dept') == 'Sales' || session()->get('dept') == null)
                        <th class = 'td-actions text-center'>Price</th>
                        <th class = 'td-actions text-center'>Status</th>
                        @endif

                        <th>Remarks</th>
      								</tr>
    								</thead>

    								<tbody>
                      @foreach($orders as $order)
      								<tr id = '{{ $order->id }}'>
                        @if((session()->get('dept') == 'Sales' || session()->get('dept') == null) || (session()->get('dept') == 'Production'
                        && $order->status->first()->phase->id > 3 &&  $order->status->first()->phase->id < 11 ))

                        <!-- Timestamp -->
        								<td> {{ $order->status->pluck('updated_at')->first()->format('m/d/Y') }} <br>
                         {{ $order->status->pluck('updated_at')->first()->format('H:i:s') }} </td>

                         <!-- Title -->
                        <td> {{$order->title}} </td>

                        <!-- Type -->
                       <td> {{$order->specification->type}} </td>

                        <!-- Customer Name -->
                        @if(session()->get('dept') == 'Sales' || session()->get('dept') == 'Production')
                        <td>{{ $order->customer->user->first_name }} {{ $order->customer->user->last_name }}</td>
                        @endif

                        <!-- Sales Representative -->
                        @if(session()->get('dept') == 'Production')
                        <td> {{ $order->customer->agent->employee->user->first_name }} {{ $order->customer->agent->employee->user->last_name }} </td>
                        @endif

                        <!-- Price -->
                        @if(session()->get('dept') == 'Sales' || session()->get('dept') == null)
                        <td>
                        </td>

                        <!-- Status -->
                        <td>
                          {{ $order->status->first()->phase->name }}
                        </td>
                        @endif

                        <td class = 'td-actions text-right'>

                          @if($order->status->first()->phase->id != 2)
                            @if(session()->get('dept') == null &&  $order->status->first()->phase->id == 1)
                            <form method="GET" action = "/order/revise/{{$order->id}}">
                              <button class = 'btn btn-warning' id = 'revise'> Revise </button> </a>
                            </form>
                            @elseif((session()->get('dept') == 'Sales' || session()->get('dept') == 'Production') && $order->status->first()->phase->id < 7)
                            <form method="GET" action = "/order/view/{{$order->id}}">
                              <a href = '/order/view/{{$order->id}}'> <btn class = 'btn btn-primary' id = 'view'>View</btn> </a>
                            </form>
                            @endif

                            @if((session()->get('dept') == null || session()->get('dept') == 'Sales') && ($order->status->first()->phase->id == 1 || $order->status->first()->phase->id > 3 &&  $order->status->first()->phase->id < 11))
                            <form method="GET" action = "/order/monitor-status/{{$order->id}}">
                              <button type ='submit' class = 'btn btn-info' id = 'view'> Status </button>
                           </form>

                            @elseif(session()->get('dept') == 'Production' && $order->status->first()->phase->id > 3 &&  $order->status->first()->phase->id < 11)
                            <form method="GET" action = "/order/to-do/{{$order->id}}">
                              <button type = "submit" class = 'btn btn-warning' id = 'view'>Manage</button> </a>
                            </form>
                            @endif

                            @if(session()->get('dept') == null &&  $order->status->first()->phase->id < 8)
                            <form method="POST" action = "/order/cancel/{{$order->id}}">
                    					{{ csrf_field() }}
                              <button type = 'submit' class = 'btn btn-danger' id = 'terminated'>Cancel</button>
                            </form>
                            @endif


                            @else
                            {{ $order->status->first()->remarks }}
                            @endif
                        </td>
                        @endif
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
