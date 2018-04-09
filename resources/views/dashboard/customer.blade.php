@extends('layout.main')

@section('title', "Dashboard")

@include('headers.dashboard')

@section('main-content')
	<div class="row">
		<div class="col-md-8">
				<div class="card card-chart">
						<div class="card-header">
									<h4 class="card-title">Recent orders</h4>
								</div>
								<div class="card card-chart">
									<table class="table table-hover">
										<thead data-color = "blue">
											<tr>
												<th>Date</th>
												<th>Job Title	</th>
												<th>Job Price</th>
												<th>Job Status</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>{{Carbon\Carbon::now()->format('M d, Y')}}</td>
												<td>Job Sample</td>
												<td>PhP 30</td>
												<td>In Process</td>
											</tr>
										</tbody>
								</table>
						</div>
				</div>
			</div>



			</div>
@endsection
