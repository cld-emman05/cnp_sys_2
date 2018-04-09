@extends('layout.main')

@section('title', "Order Supplies")

@include('headers.purchasing')

@section('main-content')
<div class="content">
			<div class="row">
					<div class="col-md-12">
							<div class="card card-chart">
									<div class="card-header">
											<h5 class="card-category">Purchase Supplies</h5>
											<h4 class="card-title">Compute Supply</h4>
									</div>

                  <div class = 'card-header'>
            				<table class="table table-hover" style="width:100%">
            				<col width="130">
            				<col width="80">
            					<thead>
            						<th width="25%">Order #</th>
            						<th width="25%">Date</th>
            						<th width="25%">Customer</th>
            						<th width="25%">Sales Agent</th>

            					</thead>

            					<tbody>
            						<tr>
            						<td>1</td>
            						<td>{{ Carbon\Carbon::now() }}</td>
            						<td><a>Crisostomo Ibarra</a></td>
                        <td><a>Nidora Zobeyala</a></td>
            						</tr>
            					</tbody>
            				</table>
            			</div>


              <div class="col-md-12" id = 'cred_supplier-panel'>
    							<div class="card card-chart" id = 'cred_supplier'>
                    <div class="card-body">

                      <!-- JOB NAME -->
                      <div class= 'card-body'>
                        <div class="row">
                          <div class="col-md-6 pr-5">
                            <div class="form-group">
                              {{ Form::label('job_name', 'Job Name') }}
                              {{ Form::text('job_name', 'Sample Job', [
                                'class' => 'form-control border-input',
                                'readonly placeholder'
                              ])}}
                            </div>
                          </div>

                          <!-- JOB TYPE -->
                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                              <!-- {{ Form::label('jobtype', 'Job Type') }}
                              {{ Form::text('jobtype', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter','id'=>'jobtype'])}} -->
                              {{ Form::label('job_type', 'Job Type:') }}
															{{ Form::text('job_type', 'Yearbook', [
                                'class' => 'form-control border-input',
                                'readonly placeholder'
                              ])}}
                            </div>
                          </div>

                          <div class="col-md-3 pr-1">
                          <div class="form-group">
                          <!-- QUANTITY -->
                          	{{ Form::label('quantity', 'Quantity') }}
                          		<div class="container">
                          			<div class="count-input space-bottom">
																	{{ Form::text('quantity', '1', [
		                                'class' => 'form-control border-input',
		                                'readonly placeholder'
		                              ])}}
                          		</div>
                          	</div>
                          </div>
                          </div>

                          <div class="col-md-3 px-1">
                          <div class="form-group">
                          <!-- PAGE COUNT -->
                          	{{ Form::label('page_count', 'Number of Pages') }}
                          		<div class="container">
                          			<div class="count-input space-bottom">
																	{{ Form::text('page_count', '1', [
																		'class' => 'form-control border-input',
																		'readonly placeholder'
																	])}}
                          			</div>
                          		</div>
                          	</div>
                          </div>

                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                            <!-- SIZE -->
                          	{{ Form::label('size', 'Size') }}
														{{ Form::text('size', 'Letter', [
															'class' => 'form-control border-input',
															'readonly placeholder'
														])}}

                            </div>
                          </div>
                          </div>

                          <br><br>

                          <div class = 'row'>
                          	<div class = 'col-md-6 pr-1'>
                          		<label><b>Cover</b></label>
                          	</div>
                          </div>

                          <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <!-- COVER PAPER -->
                            {{ Form::label('cover_paper', 'Paper Type') }}
														{{ Form::text('cover_paper', '--', [
															'class' => 'form-control border-input',
															'readonly placeholder'
														])}}
                            </div>
                          </div>

                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                            <!-- INSIDE PAPER -->
                          	{{ Form::label('cover_color', 'Paper Color') }}
														{{ Form::text('cover_color', 'Full Color', [
															'class' => 'form-control border-input',
															'readonly placeholder'
														])}}
                            </div>
                          </div>
                          </div>

                          <div class = 'row'>
                          	<div class = 'col-md-6 pr-1'>
                          		<label><b>Inside</b></label>
                          	</div>
                          </div>

                          <div class="row">
                          <div class="col-md-6 pr-1">
                            <div class="form-group">
                            <!-- COVER PAPER -->
                            {{ Form::label('inside_paper', 'Paper Type') }}
														{{ Form::text('inside_paper', '--', [
															'class' => 'form-control border-input',
															'readonly placeholder'
														])}}
                          <br><br>
                            </div>
                          </div>

                          <div class="col-md-6 pl-1">
                            <div class="form-group">
                            <!-- INSIDE PAPER -->
                          	{{ Form::label('inside_color', 'Paper Color') }}
														{{ Form::text('inside_color', 'Grayscale', [
															'class' => 'form-control border-input',
															'readonly placeholder'
														])}}
                          <br><br>
                            </div>
                          </div>
                        </div>

												<div class = 'row'>
													<div class = 'col-md-6'>
														<label><b>Computation</b></label>
													</div>
												</div>

										<div class = 'row'>
											<div class = 'col-md-6 pl-1'>
												<div class = 'form-group'>
													{{ Form::label('ream_count', 'Number of Reams') }}
																			{{ Form::text('ream_count', '', [
																			'class' => 'form-control border-input',
																			'readonly placeholder'
																			])}}
										</div>
									</div>

									<div class="col-md-6 pr-1">
									<div class="form-group">
									<!-- QUANTITY -->
										{{ Form::label('supply_price', 'Amount (in PhP)') }}
										{{ Form::text('supply_price', '', [
														'class' => 'form-control border-input',
														'readonly placeholder'
													])}}
									</div>
									</div>
								</div>


                        <div class="container-fluid text-center">
                          {{Form::submit('Post', ['class' => 'btn btn-success btn-fill btn-wd pull-right', 'id' => 'post-calculation'])}}
                        </form>
                        <button class="btn btn-info btn-wd btn-fill pull-left" id='calculate'>Compute</button>
                      </div>

    								</div>
    							</div>
				</div>
			</div>
	</div>

</div>
</div>
@endsection
