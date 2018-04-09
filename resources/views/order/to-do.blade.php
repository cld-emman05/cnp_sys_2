@extends('layout.main')

@section('title', "Order Checklist")

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
						<h4 class="card-title">Phase</h4>
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

									</div>
									</div>
							</div>

					<div class="col-md-12">
					<div class="card card-tasks">
						<div class="card-header">
							<h4 class="card-title">Checklist</h4>
						</div>
						<div class="card-chart">
							<div class="table-full-width table-responsive">
								<table class="table table-stripe">
									<thead>
										<th></th>
										<th>Phase</th>
										<th class= 'td-actions text-right'> Updated at </th>

									<tbody>
											<tr>
													<td>
															<div class="form-check">
																	<label class="form-check-label">
																			<input class="form-check-input" type="checkbox" checked="">
																			<span class="form-check-sign"></span>
																	</label>
															</div>
													</td>

													<td class="text-left">Typesetting/Layouting</td>

													<td class="td-actions text-right">
														{{Carbon\Carbon::now()}}
													</td>
											</tr>

											<tr>
													<td>
															<div class="form-check">
																	<label class="form-check-label">
																			<input class="form-check-input" type="checkbox">
																			<span class="form-check-sign"></span>
																	</label>
															</div>
													</td>

													<td class="text-left">Imagesetting</td>
													<td class="td-actions text-right"> {{Carbon\Carbon::now()}}

													</td>
											</tr>
											<tr>
													<td>
															<div class="form-check">
																	<label class="form-check-label">
																			<input class="form-check-input" type="checkbox" checked="">
																			<span class="form-check-sign"></span>
																	</label>
															</div>
													</td>

													<td class="text-left">Platemaking
													</td>
													<td class="td-actions text-right"> {{Carbon\Carbon::now()}}

													</td>
											</tr>
											<tr>
													<td>
															<div class="form-check">
																	<label class="form-check-label">
																			<input class="form-check-input" type="checkbox">
																			<span class="form-check-sign"></span>
																	</label>
															</div>
													</td>

													<td class="text-left">Offset/Press</td>
													<td class="td-actions text-right"> {{Carbon\Carbon::now()}}

													</td>
											</tr>
											<tr>
													<td>
															<div class="form-check">
																	<label class="form-check-label">
																			<input class="form-check-input" type="checkbox">
																			<span class="form-check-sign"></span>
																	</label>
															</div>
													</td>

													<td class="text-left">Stripping</td>
													<td class="td-actions text-right"> {{Carbon\Carbon::now()}}

													</td>
											</tr>
											<tr>
													<td>
															<div class="form-check">
																	<label class="form-check-label">
																			<input class="form-check-input" type="checkbox">
																			<span class="form-check-sign"></span>
																	</label>
															</div>
													</td>

													<td class="text-left">Bindery</td>
													<td class="td-actions text-right"> {{Carbon\Carbon::now()}}

													</td>
											</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
					</div>
                            <div class="text-center">
                            <!-- SUBMUT BUTTON -->
                            {{Form::submit('Update', ['class' => 'btn btn-info btn-fill btn-wd', 'id'=>'update'])}}
                            </div>
			</div>
		</div>
	</div>
</div>
@endsection
