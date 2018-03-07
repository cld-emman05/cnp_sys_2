@extends('layout.main')

@section('title', "Schedule Delivery")

@include('headers.purchasing')

@section('main-content')
<div class="content">
			<div class="row">
					<div class="col-md-12">
							<div class="card card-chart">
									<div class="card-header">
											<h5 class="card-category">Order</h5>
											<h4 class="card-title">Schedule Delivery</h4>
									</div>

									<div class="card-body">
                    <center>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                    	{{ Form::label('supplier_name', 'Supplier Name') }}
                    	<select class="form-control" id="supplier_name" name="supplier_name">
                    	<option value="1"> -- </option>
                    	<option value="2"> Job Sample </option>
                    	</select>

											<button name = 'sel_supplier', class = 'btn btn- btn-fill btn-wd', id='sel_supplier'>
												Select </button>
                      </div>
                    </div>
                    </center>
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
                    						<div class="col-md-6">
                    							<div class="form-group">
                    								<!-- DATE DUE -->
                    								{{ Form::label('date_due', 'Select Delivery Date') }}
                    								{{ Form::date('date_due', '', ['class' => 'form-control border-input','id'=>'datedue'])}}
                    							</div>
                    						</div>
                    					</div>

          											</div>
                                </div>
            								</div>
                            <div class="text-center">
                            <!-- SUBMUT BUTTON -->
                            {{Form::submit('Schedule Delivery', ['class' => 'btn btn-info btn-fill btn-wd', 'id'=>'submit'])}}
                            </div>
            							</div>
        								</div>
				</div>
			</div>
	</div>

</div>
</div>
@endsection
