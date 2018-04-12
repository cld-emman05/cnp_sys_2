@extends('layout.main')

@section('title', "Revise Order")

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
											<h5 class="card-category">Order Request</h5>
											<h4 class="card-title">Revise Order</h4>
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
											<div class='card card-body'>
												<div class="card-header">
													<h4 class="card-title">Upload Revision</h4>
												</div> <hr>

											<div class="card-chart">
												<div class="row">
													<div class="col-md-6 pr-1">
														{{ Form::label('job_sample', 'Job Sample') }}
															<center>
															<input type= 'file' name = 'job_sample' class = 'form-control'>
														</center>
													</div>
												</div>

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <!-- COMMENTS -->
                      	{{ Form::label('comments', 'Comments') }}
												<textarea name = 'comments'
													class = 'form-control border-input' row = 5 id = 'comments'> </textarea>
                        </div>
                      </div>
                      </div>
										</div>

  									</div>
                  </div>

                    <div class="text-center">
                    <!-- SUBMUT BUTTON -->
                    {{Form::submit('Submit Revision', ['class' => 'btn btn-info btn-fill btn-wd', 'id'=>'submit'])}}
                    </div>

    							</div>
								</div>
				</div>
			</div>
@endsection
