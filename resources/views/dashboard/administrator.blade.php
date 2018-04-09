@extends('layout.main')

@section('title', "Admin Dashboard")

@include('headers.table')

@section('main-content')
<div class="content">
	<div class="row">
		<div class="col-md-6">
				<div class="card card-chart">


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
													<th>Date</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>Job price is expensive</td>
													<td>1</a></td>
													<td>April 5, 2019</a></td>
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
								<h4 class="card-title">Debt Tracker</h4>
							</div>
							<div class="card card-chart">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Supplier</th>
											<th>Total Balance</th>
											<th>Term Due</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td><a href= '#'>Dhunwell</a></td>
											<td><a href= '#'>Php 500</a></td>
											<td><a href= '#'>{{Carbon\Carbon::now()->format('M d, Y')	}}</a></td>
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
							<h4 class="card-title">Cashflow</h4>
						</div>
						<div class="card card-chart">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Date</th>
																<th>Source</th>
																<th>Amount</th>
																<th>Method</th>

									</tr>
								</thead>

								<tbody>
									<tr>
																<td><a href= '#'>{{Carbon\Carbon::now()->format('M d, Y')	}}</a></td>
																<td><a href= '#'>Crisostomo Ibarra</a></td>
																<td><a href= '#'>Php 500</a></td>
																<td><a href= '#'>Inflow</a></td>
															</tr>

															<tr>
																<td><a href= '#'>{{Carbon\Carbon::now()->format('M d, Y')	}}</a></td>
																<td><a href= '#'>Dhunwell</a></td>
																<td><a href= '#'>Php 250</a></td>
																<td><a href= '#'>Outflow</a></td>
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
							<h4 class="card-title">Profit</h4>
						</div>
						<div class="card card-chart">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Date</th>
																<th>Amount</th>
																<th>Customer</th>

									</tr>
								</thead>

								<tbody>
									<tr>
																<td><a href= '#'>{{Carbon\Carbon::now()->format('M d, Y')	}}</a></td>
																<td><a href= '#'>De La Salle Green and White</a></td>
																<td><a href= '#'>Php 500000</a></td>
															</tr>

															<tr>
																<td><a href= '#'>{{Carbon\Carbon::now()->format('M d, Y')	}}</a></td>
																<td><a href= '#'>SPRAWL MMA</a></td>
																<td><a href= '#'>Php 250000</a></td>
															</tr>

								</tbody>
							</table>
					</div>
			</div>
		</div>
</div>

@endsection
