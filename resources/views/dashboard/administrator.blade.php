@extends('layout.main')

@section('title', "Admin Dashboard")

@include('headers.dashboard')

@section('main-content')
<div class="content">
	<div class="row">
		<div class="col-md-6">
				<div class="card card-chart">
						<div class="card-header">
							<i class="card-category">Greetings, {{ auth::user()->first_name }} {{ auth::user()->last_name }} !</i>
								<h4 class="card-title">Top agents</h4>
							</div>
							<div class="card card-chart">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Sales Agent</th>
											<th>Orders made</th>
											<th>Total sales (PhP)</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>De La Salle University</td>
											<td><a href = 'order/view'>1</a></td>
											<td>PhP 30</td>
										</tr>
									</tbody>
								</table>
						</div>
				</div>
			</div>

			<div class="col-md-6">
					<div class="card card-chart">
							<div class="card-header">
									<h4 class="card-title">Time check</h4>
									<h5 class="card-category"> <i class = "date"> </i></h5>
								</div>
								<div class="card-body">
									<h1><b class="clock"></b></h1>
								</div>
					</div>
				</div>
			</div>

			<div class="row">
					<div class="col-lg-6">
						<div class="card card-chart">
								<div class="card-header">
									<i class="card-category">Greetings, {{ auth::user()->first_name }} {{ auth::user()->last_name }} !</i>
										<h4 class="card-title">Top customers</h4>
									</div>
									<div class="card card-chart">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Company</th>
													<th>Orders made</th>
													<th>Total sales (PhP)</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>De La Salle University</td>
													<td><a href = 'order/view'>1</a></td>
													<td>PhP 30</td>
												</tr>
											</tbody>
										</table>
								</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="card card-chart">
								<div class="card-header">
									<i class="card-category">Greetings, {{ auth::user()->first_name }} {{ auth::user()->last_name }} !</i>
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
			</div>

			<div class="row">
					<div class="col-lg-6">
						<div class="card card-chart">
								<div class="card-header">
									<i class="card-category">Greetings, {{ auth::user()->first_name }} {{ auth::user()->last_name }} !</i>
										<h4 class="card-title">Rejected orders</h4>
									</div>
									<div class="card card-chart">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Reasons</th>
													<th>Customers</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>Job price is expensive</td>
													<td>1</a></td>
												</tr>
											</tbody>
										</table>
								</div>
						</div>
					</div>
	</div>
@endsection
