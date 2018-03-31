@extends('layout.main')

@section('title', "View Order")

@include('headers.table')

@section('main-content')
<!-- ORDER FORM -->
<div class="row">
	<div class="col-md-12">
		<div class="card card-chart">
			<div class = 'card-header'>
				<table class="table table-hover" style="width:100%">
					<a href = '/order'>
						<btn class = 'btn btn-primary' id = 'return'>
						<i class="now-ui-icons arrows-1_minimal-left"></i> Return</btn>
					</a>
					<div class="card-header">
          <h5 class='card-category'>Orders</h5>
            <h4 class="card-title">View Specifications</h4>
          </div>

					<div class = 'card-body'>
						<div class col-lg-12 md-4>
						<table class="table table-hover">
							<col width="130">
							<col width="80">
								<thead>
									<tr>
									</tr>
									<th width="25%">Order #</th>
									<th width="25%">Customer</th>
									<th width="25%">Date</th>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
										<td>Crisostomo Ibarra</td>
										<td>{{ Carbon\Carbon::now() }}</td>
									</tr>
								</tbody>
							</table>
			</div>

			@if(count($errors) > 0)
				<div class="alert alert-danger">
				<strong>Whooops!! </strong> There were some problems with your input.<br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
				</div>
			@endif

	<div class="col-lg-12 md-4">
		<div class = 'card card-chart'>
			<div class="content">
				<form>
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
							</div>

							<div class="card-header">
								<center><h2 class="title"> Specifications </h2>
							</div>

							<!-- FORM CONTENT -->
							<div class="card-body">

								<div class="row">
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
										</select>
									</div>
								</div>
							</div>

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
										</select>
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
									</select>
								</div>
							</div>

							<div class="col-md-6 pl-1">
								<div class="form-group">
							  <!-- INSIDE PAPER -->
								{{ Form::label('inside_color', 'Paper Color') }}
								{{ Form::text('cover_paper', 'Grayscale', [
									'class' => 'form-control border-input',
									'readonly placeholder'
								])}}
								</select>
							  </div>
							</div>
						</div>

						@if(auth::user()->user_type == 2)
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<!-- JOB SAMPLE -->
								  {{ Form::label('job_sample', 'Job Sample') }}
									{{ Form::file('myFile') }}
							  </div>
							</div>
						</div>
						@endif

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
								<!-- LAMINATION -->
									{{ Form::label('lamination', 'Lamination') }}
									{{ Form::text('lamination', '--', [
										'class' => 'form-control border-input',
										'readonly placeholder'
									])}}
								</div>
						</div>

						<div class="col-lg-6">
							<div class="form-group">
							<!-- BINDING -->
							{{ Form::label('binding', 'Binding') }}
							{{ Form::text('binding', '--', [
								'class' => 'form-control border-input',
								'readonly placeholder'
							])}}
						</div>
					</div>
					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<!-- DATE DUE -->
								{{ Form::label('date_due', 'Date Due') }}
								<input type = 'text' name = 'date_due' value = {{ \Carbon\Carbon::now() }}
									class = 'form-control border-input' readonly placeholder/>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<!-- COMMENTS -->
								{{ Form::label('comments', 'Comments') }}
								<textarea name = 'comments'
									class = 'form-control border-input' row = 5 id = 'comments' readonly placeholder>This is a sample comment</textarea>
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- <div v-if="errors.products_empty">
					<p class="alert alert-danger"></p> -->
					<!-- <hr> -->
	<div class="text-center">
	@if(session()->get('user') == 'Production')
		<btn class = 'btn btn-primary' id = 'download'> Download File</btn>

		<btn class = 'btn btn-success' id = 'production'> Submit for Production</btn>
	</a>
	@endif
	</div>
</form>
<div class="clearfix"></div>

</div>
</div>
</div>
</div>
@endsection
