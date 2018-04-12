@extends('layout.main')

@section('title', "Monitor Job Status")

@include('headers.table')

@section('main-content')
<div class="content">
			<div class="row">
					<div class="col-md-12">
							<div class="card card-chart">
									<div class="card-header">
										<a href = '/order'>
											<btn class = 'btn btn-primary' id = 'return'>
											<i class="now-ui-icons arrows-1_minimal-left"></i> Return</btn>
										</a>
											<h5 class="card-category">Order</h5>
											<h4 class="card-title">Status</h4>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class = 'card-header'>
													<table  class="table table-hover" style="width:100%">
													<col width="130">
													<col width="80">
														<thead>
															<th width="25%">Order #</th>
															<th width="25%">Title</th>
															<th width="25%">Salesman</th>
                              <th width="25%">Updated at</th>
														</thead>

														<tbody>
															<tr>
															<td>{{ $order->id }}</td>
															<td>{{ $order->title }}</td>
															@if(session()->get('dept') == 'Sales')
															<td><a>{{ $order->customer->company}}</a></td>
															@elseif(session()->get('dept') == null)
															<td><a>{{ $order->customer->agent->employee->user->first_name }} {{ $order->customer->agent->employee->user->last_name }}</a></td>
															@endif
                              <td>{{ $order->status->first()->updated_at->format('m-d-Y') }}</a></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

              <div class="col-md-12">
    							<div class="card card-chart">
                    <div class="card-body">

											<div class="row">
												<div class="col-md-12">
                  			<!-- JOB TYPE -->
												<table class="table table-striped">
													<thead>
														<th>Job Status</th>
														@if($order->status->first()->phase->id >= 4 && $order->status->first()->phase->id < 8)
														<th></th>
														@elseif($order->status->first()->phase->id >= 8 && $order->status->first()->phase->id <= 10)
														<th></th>
														<th></th>
														@elseif($order->status->first()->phase->id > 10)
														<th></th>
														<th></th>
														<th></th>
														@endif
													</thead>

													<tbody class = 'col-md-12'>
													@if($order->status->first()->phase->id == 1)
													<td class = 'alert alert-info'><i class="now-ui-icons loader_refresh spin"></i>
															For Quotation </td>
													@elseif($order->status->first()->phase->id >= 4 && $order->status->first()->phase->id < 8)
													<td class = 'alert alert-info'><i class = 'now-ui-icons ui-1_check'></i> For Quotation</td>
													<td class = 'alert alert-primary'><i class= "now-ui-icons loader_refresh spin"></i> For Layoutting</td>
													@elseif($order->status->first()->phase->id >= 8 && $order->status->first()->phase->id <= 10)
														<td class = 'alert alert-info'><i class = 'now-ui-icons ui-1_check'></i> For Quotation</td>
														<td class = 'alert alert-primary'><i class = 'now-ui-icons ui-1_check'></i> For Layoutting</td>
														<td class = 'alert alert-warning'><i class="now-ui-icons loader_refresh spin"></i> Ongoing Production</td>
													@elseif($order->status->first()->phase->id > 10 && $order->status->first()->phase->id < 12)
														<td class = 'alert alert-info'><i class = 'now-ui-icons ui-1_check'></i> For Quotation</td>
														<td class = 'alert alert-primary'><i class = 'now-ui-icons ui-1_check'></i> For Layoutting</td>
														<td class = 'alert alert-warning'><i class = 'now-ui-icons ui-1_check'></i> Ongoing Production</td>
														<td class = 'alert alert-success'><i class="now-ui-icons loader_refresh spin"></i> <a href = '/order/delivery/{{$order->id}}'> Ready for Delivery </a></td>
													@elseif($order->status->first()->phase->id == 12)
													<td class = 'alert alert-info'><i class = 'now-ui-icons ui-1_check'></i> For Quotation</td>
													<td class = 'alert alert-primary'><i class = 'now-ui-icons ui-1_check'></i> For Layoutting</td>
													<td class = 'alert alert-warning'><i class = 'now-ui-icons ui-1_check'></i> Ongoing Production</td>
													<td class = 'alert alert-success'><i class = 'now-ui-icons ui-1_check'></i> <a href = '/order/delivery/{{$order->id}}'> Ready for Delivery </a></td>
													@endif
												</tbody>
												</table>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
	                  			<!-- JOB TYPE -->
													<table class="table table-striped">
														<thead>
															<th>Timestamp</th>
															<th>Status</th>
														</thead>

														<tbody class = 'col-md-12'>
														<td>{{Carbon\Carbon::now()->format('M d, Y')}} <br>
																{{Carbon\Carbon::now()->format('H:i:s')}}</td>
														<td>Your order has sent for produced.</td>
													</tbody>
													</table>
														</div>
													</div>

                      <div class="row">
                      <div class="col-md-12 text-right pl-2">
                        <div class="form-group">
                        <!-- COMMENTS -->
												{{ Form::label('updated', 'Latest update') }}
												<p name = 'updated'
													class = 'text-muted' id = 'updated'><i>{{Carbon\Carbon::now()}}</i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
