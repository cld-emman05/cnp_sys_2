@extends('layout.main')

@section('title', "Delivery")

@include('headers.purchasing')

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
											<h4 class="card-title">Delivery</h4>
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
										</div>


                      <div class="col-md-12">
            							<div class="card card-chart">
                            <div class="card-body">
                              <div class="row">
                          			<div class="col-md-6 pr-1">
                          				<div class="form-group">
                          					{{ Form::label('job_name', 'Job Name') }}
                          					<input type = 'text' name = 'job_name' value = 'Sample Job'
                          						class = 'form-control border-input' readonly placeholder/>
                          				</div>
                          			</div>

                          			<!-- JOB TYPE -->
                          			<div class="col-md-6 pl-1">
                          				<div class="form-group">
                          					<!-- {{ Form::label('jobtype', 'Job Type') }}
                          					{{ Form::text('jobtype', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter','id'=>'jobtype'])}} -->
                          					{{ Form::label('job_type', 'Job Type') }}
        														<input type = 'text' name = 'job_type' value = 'Yearbook'
                          						class = 'form-control border-input' readonly placeholder/>
                          				</div>
                          			</div>
                          		</div>

															  <div class="row">
																	<!-- JOB TYPE -->
																	<div class="col-md-6 pr-1">
																		<div class="form-group">
																			<!-- {{ Form::label('jobtype', 'Job Type') }}
																			{{ Form::text('jobtype', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter','id'=>'jobtype'])}} -->
																			{{ Form::label('job_price', 'Job Price') }}
																			<input type = 'text' name = 'job_price' value = 'Yearbook'
																				class = 'form-control border-input' readonly placeholder/>
																		</div>
																	</div>

															@if($order->status->first()->phase->id == 11	&& session()->get('dept') == 'Sales')

                    						<div class="col-md-6 pl-1">
                    							<div class="form-group">
                    								<!-- DATE DUE -->
                    								{{ Form::label('date_due', 'Select Delivery Date') }}
                    								{{ Form::date('date_due', '', ['class' => 'form-control border-input','id'=>'datedue'])}}
                    							</div>
                    						</div>

															@endif

															</div>

          											</div>
                                </div>
            								</div>
													@if(session()->get('dept') == 'Sales')
                            <div class="text-center">
                            <!-- SUBMUT BUTTON -->
                            {{Form::submit('Schedule Delivery', ['class' => 'btn btn-info btn-fill btn-wd', 'id'=>'submit'])}}
														{{Form::submit('Claim Payment', ['class' => 'btn btn-success btn-fill btn-wd', 'id'=>'submit'])}}
                            </div>
													@endif
            							</div>
        								</div>
				</div>
			</div>
@endsection
