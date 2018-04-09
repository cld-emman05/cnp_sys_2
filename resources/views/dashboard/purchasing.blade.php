@extends('layout.main')

@section('title', "Purchasing Dashboard")

@include('headers.table')

@section('main-content')
<div class="content">
	<div class="row">
	<!--	<div class="col-md-6">
				<div class="card card-chart">
						<div class="card-header">
							<i class="card-category">Greetings, {{ auth::user()->first_name }} {{ auth::user()->last_name }} !</i>
								<h4 class="card-title">Mostly used Paper Types</h4>
							</div>
							<div class="card card-chart">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Paper Type</th>
											<th>Component</th>
											<th>Quantity (pcs)</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>BP50</td>
											<td>Inside</td>
											<td>25</td>
										</tr>

										<tbody>
											<tr>
												<td>C2S160</td>
												<td>Cover</td>
												<td>10</td>
											</tr>
									</tbody>
								</table>
						</div>
				</div> !-->
			</div>

						<div class="col-md-6">
								<div class="card card-chart">
										<div class="card-header">
											<i class="card-category">Greetings, {{ auth::user()->first_name }} {{ auth::user()->last_name }} !</i>
												<h4 class="card-title">Supplier Availability</h4>
											</div>
											<div class="card card-chart">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Supplier</th>
															<th>Status</th>
															<th>Remarks</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>Dhunwell</td>
															<td>Available</td>
															<td class = 'text-success'>Available</td>
														</tr>

														<tr>
															<td>Star Corp</td>
															<td>Unavailable</td>
															<td class = 'text-danger'>Balance is at credit limit	</td>
														</tr>

														<tr>
															<td>Cattleya</td>
															<td class>At Risk</td>
															<td class = 'text-warning'>Balance near credit limit</td>
															</tr>
													</tbody>
												</table>
										</div>
								</div>
					</div>

				</div>

	</div>
@endsection
