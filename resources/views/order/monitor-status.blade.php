@extends('layout.main')

@section('title', "Monitor Job Status")

@include('headers.table')

@section('main-content')
<div class="content">
			<div class="row">
					<div class="col-md-12">
							<div class="card card-chart">
									<div class="card-header">
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
															<th width="25%">Customer</th>
															<th width="25%">Salesman</th>
                              <th width="25%">Updated at</th>
														</thead>

														<tbody>
															<tr>
															<td>1</td>
															<td>Journal</td>
															<td><a>Crisostomo Ibarra</a></td>
															<td><a>Nidora Zobeyala</a></td>
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
                  			<!-- JOB TYPE -->
                  			<div class="col-md-3 pr-1">
                  				<div class="form-group">
                  					{{ Form::label('job_status', 'Job Status') }}
														<div class="alert alert-info">
														<span><b> In Process </b></span>
														</div>

														<div class="alert alert-warning">
														<span><b> Ongoing Process </b></span>
														</div>

														<div class="alert alert-success">
														<span><b> Ready for Delivery </b></span>
														</div>
                  				</div>
                  			</div>
                  		</div>

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <!-- COMMENTS -->
												{{ Form::label('comments', 'Comments') }}
												<textarea name = 'comments'
													class = 'form-control border-input' row = 5 id = 'comments' readonly placeholder>This is a sample comment</textarea>
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
      </div>
</div>
@endsection
