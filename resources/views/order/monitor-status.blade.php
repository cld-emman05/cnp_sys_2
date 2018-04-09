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
															<th width="25%">Title of Job</th>
															<th width="25%">Salesman</th>
                              <th width="25%">Updated at</th>
														</thead>

														<tbody>
															<tr>
															<td>1</td>
															<td>Journal</td>
															@if(@auth::user()->user_types->type == 'Sales')
															<td><a>Crisostomo Ibarra</a></td>
															@elseif(@auth::user()->user_types->type == 'Customer')
															<td><a>Nidora Zobeyala</a></td>
															@endif
                              <td>{{ Carbon\Carbon::now() }}</a></td>
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
												<table class="table table-hover">
													<thead>
														<th>Job Status</th>
														<th></th>
														<th></th>
													</thead>

													<tbody class = 'col-md-12'>
													<td class = 'alert alert-info'><i class = 'now-ui-icons ui-1_check'></i> In Process</td>
													<td class = 'alert alert-warning'><i class="now-ui-icons loader_refresh spin"></i> Ongoing Production</td>
													<td class = 'alert alert-success'>Ready for Delivery</td>
												</tbody>
												</table>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
	                  			<!-- JOB TYPE -->
													<table class="table table-hover">
														<thead>
															<th>Date</th>
															<th>Status</th>
														</thead>

														<tbody class = 'col-md-12'>
														<td>{{Carbon\Carbon::now()->format('M d, Y')}}</td>
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
