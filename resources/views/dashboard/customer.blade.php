@extends('layout.main')

@section('title', "Dashboard")

@include('headers.dashboard')

@section('main-content')
	<div class="row">
		<div class="col-md-6">
				<div class="card card-chart">
						<div class="card-header">
							<i class="card-category">Greetings, {{ auth::user()->first_name }} {{ auth::user()->last_name }} !</i>
								<h4 class="card-title">Ongoing Jobs</h4>
							</div>
							<div class="card card-chart">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Updates</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td><a href= '#'>Order 'Job Sample' needs quotation approval</a></td>
										</tr>

										<tr>
											<td><a href= '#'>Order 'Job Sample' is ongoing production</a></td>
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
@endsection
