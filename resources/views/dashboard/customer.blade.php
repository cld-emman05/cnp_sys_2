@extends('layout.main')

@section('title', "Dashboard")

@include('headers.table')

@section('main-content')
	<div class="row">
		<div class="col-md-9">
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

				<div class="col-md-3">
					<div class="card card-chart">
							<div class="card-header">
									<h4 class="card-title">Sales Agent</h4>
							</div>
							<div class="card card-chart">
								<table class="table table-hover">
									<thead>
										<tr>
											<td><a href= '#'>{{ DB::table('users')
											  									->join('employees', 'employees.user_id', '=', 'users.id')
																					->join('agents', 'agents.employee_id', '=', 'employees.id')
																					->join('customers', 'customers.agent_id', '=', 'agents.id')
																					->select('users.last_name')
																					->value('users.last_name')
																				}}
																				,
																				{{ DB::table('users')
																														->join('employees', 'employees.user_id', '=', 'users.id')
																														->join('agents', 'agents.employee_id', '=', 'employees.id')
																														->join('customers', 'customers.agent_id', '=', 'agents.id')
																														->select('users.first_name')
																														->value('users.first_name')
																													}}
																			</a></td>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>09221168711</td>
										</tr>
									</tbody>
							</table>
					</div>
							</div>
				</div>
				</div>


			</div>
@endsection
