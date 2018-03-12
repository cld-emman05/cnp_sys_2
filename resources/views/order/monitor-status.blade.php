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
                  			<div class="col-md-12">
													{{ Form::label('job_status', 'Job Status') }}
                  				<div class="row form-group col-md-12">
														<span class="alert alert-info col-md-4 pr-2">
															<b> In Process </b>
														</span>

														<span class="alert alert-warning col-md-4 px-2">
															<b> Ongoing Process </b>
														</span>

														<span class="alert alert-success col-md-4 pl-2">
														<b> Ready for Delivery </b></span>
														</div>
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
