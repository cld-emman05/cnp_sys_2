@extends('layout.main')

@section('title', "Update Job Status")

@include('headers.table')

@section('main-content')
<div class="content">
			<div class="row">
					<div class="col-md-12">
							<div class="card card-chart">
									<div class="card-header">
											<h5 class="card-category">Order</h5>
											<h4 class="card-title">Update Status</h4>
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
														</thead>

														<tbody>
															<tr>
															<td>1</td>
															<td>Journal</td>
															<td><a>Crisostomo Ibarra</a></td>
															<td><a>Nidora Zobeyala</a></td>
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
                  			<div class="col-md-6 pr-1">
                  				<div class="form-group">
                  					<!-- {{ Form::label('jobtype', 'Job Type') }}
                  					{{ Form::text('jobtype', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter','id'=>'jobtype'])}} -->
                  					{{ Form::label('job_status', 'Job Status') }}
                  					<select class="form-control" id="job_status" name="job_status">
                  					<option value="1"> -- </option>
														<option value="2"> In Process </option>
														<option value="3"> Ongoing Production </option>
														<option value="4"> Ready for Delivery </option>
                  					</select>
                  				</div>
                  			</div>
                  		</div>

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <!-- COMMENTS -->
                      	{{ Form::label('comments', 'Comments') }}
                      	{{ Form::textarea('comments', '', ['class' => 'form-control border-input', 'placeholder' => 'Place your comment here', 'row' => 5,'id'=>'comments'])}}
                        </div>
                      </div>
                      	</div>

  											</div>

                        </div>
                    <div class="text-center">
                    <!-- SUBMUT BUTTON -->
                    {{Form::submit('Update', ['class' => 'btn btn-info btn-submit btn-wd', 'id'=>'update'])}}
                    </div>
    							</div>
									</div>
				</div>
			</div>
	</div>

</div>
@endsection
