@extends('layout.main')

@section('title', "Sales Dashboard")

@include('headers.table')

@section('main-content')
<div class="content">
	<div class="row">
		<div class="col-md-6">
				<div class="card card-chart">
						<div class="card-header">

								<h4 class="card-title">Recent orders</h4>
							</div>
							<div class="card card-chart">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Date</th>
											<th>Job Title</th>
											<th>Company</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>{{Carbon\Carbon::now()->format('M d, Y')}}</td>
											<td><a href = 'order/view'>Job Sample</a></td>
											<td>De La Salle University<td>
										</tr>
									</tbody>
								</table>
						</div>
				</div>
			</div>

					<div class="col-lg-6">
						<div class="card card-chart">
								<div class="card-header">
										<h4 class="card-title">Sales Quota</h4>
									</div>
									<div class="card card-chart">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Total Amount</th>
													<th>Total Sales Needed</th>
													<th>Days to reach quota</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>250,000</td>
													<td>150,000</td>
													<td>120 days</td>
												</tr>
											</tbody>
										</table>
								</div>
						</div>
					</div>
				</div>

<!--<div class="row">
			<div class="col-lg-6">
				<div class="card card-chart">
						<div class="card-header">

								<h4 class="card-title">Popular Job Orders</h4>
							</div>
							<div class="card card-chart">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Job Type</th>
											<th>Orders made</th>
											<th>Total sales</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>Yearbook</td>
											<td><a href = 'order/view'>1</a></td>
											<td>PhP 30</td>
										</tr>
									</tbody>
								</table>
						</div>
				</div>
			</div>
	</div>-->

	</div>
@endsection
