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

              <div class="col-md-12">
    							<div class="card card-chart">
                    <div class="card-body">
                      <div class="row">
                  			<div class="col-md-6 pr-5">
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
                      <div class="col-md-6 pr-5">
                        <div class="form-group">
                        <!-- DATE DUE -->
                      	  {{ Form::label('date_due', 'Date Due') }}
													<input type = 'text' name = 'date_due' value = {{ \Carbon\Carbon::now() }}
														class = 'form-control border-input' readonly placeholder/>
                        </div>
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <!-- JOB SAMPLE -->
                      	  {{ Form::label('job_sample', 'Job Sample') }}
                      		{{ Form::file('myFile') }}
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
