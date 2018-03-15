@extends('layout.main')

@section('title', "Create Order")

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
            <h4 class="card-title">Create Request</h4>
          </div>

					<div class = 'card-body'>
						<div class col-lg-12 md-4>
						<table class="table table-hover">
							<col width="130">
							<col width="80">
								<thead>
									<th width="25%">Order #</th>
									<th width="25%">Date</th>
								</thead>

								<tbody>
									<tr>
										<td>1</td>
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
										{{ Form::label('job_name', 'Job Name:') }}
										{{ Form::text('job_name', '', [
											'class' => 'form-control border-input',
											'placeholder' => 'Enter'
										])}}
									</div>
								</div>

								<!-- JOB TYPE -->
								<div class="col-md-6 pl-1">
									<div class="form-group">
										<!-- {{ Form::label('jobtype', 'Job Type') }}
										{{ Form::text('jobtype', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter','id'=>'jobtype'])}} -->
										{{ Form::label('job_type', 'Job Type:') }}
										<select class="form-control" id="jobtype" name="jobtype">
										<option value="0"> -- </option>
										<option value="1"> Poster </option>
										<option value="2"> Book </option>
										<option value="3"> Magazine </option>
										<option value="4"> Yearbook </option>
										<option value="5"> Brochure </option>
										<option value="6"> Calendar </option>
										<option value="7"> Flyer </option>
										</select>
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
													{{ Form::number('quantity', '1', ['class' => 'form-control border-input', 'min' => '1'])}}
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
													{{ Form::number('page_count', '1', ['class' => 'form-control border-input', 'min' => '1'])}}
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 pl-1">
										<div class="form-group">
										<!-- SIZE -->
										{{ Form::label('size', 'Size') }}
										<select class="form-control" id="size" name="size">
										<option value="0"> -- </option>
										<option value="1"> Letter (8.5 x 11 in) </option>
										<option value="2"> Legal (8.5 x 13 in) </option>
										<option value="3"> Broadsheet (24 x 18 in) </option>
										<option value="4"> C4 (9 x 12 in) </option>
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
										<select class="form-control" id="cover_paper" name="cover_paper">
											<option value="0"> -- </option>
											<option value="2"> C2S140 </option>
											<option value="3"> C2S160 </option>
											<option value="4"> C2S180 </option>
											<option value="5"> C2S220 </option>
										</select>
									</div>
								</div>

								<div class="col-md-6 pl-1">
									<div class="form-group">
									<!-- INSIDE PAPER -->
									{{ Form::label('cover_color', 'Paper Color') }}
									<select class="form-control" id="cover_color" name="cover_color">
									<option value="0"> -- </option>
									<option value="1"> Black and White </option>
									<option value="2"> Colored </option>
									</select>
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
									<select class="form-control" id="cover_paper" name="cover_paper">
									<option value="0"> -- </option>
									<option value="1"> BP50 </option>
									<option value="2"> BP60 </option>
									<option value="3"> BP70 </option>
									<option value="4"> C2S70 </option>
									<option value="5"> C2S80 </option>
									<option value="6"> C2S100 </option>
									</select>
								</div>
							</div>

							<div class="col-md-6 pl-1">
								<div class="form-group">
								<!-- INSIDE PAPER -->
								{{ Form::label('inside_color', 'Paper Color') }}
								<select class="form-control" id="cover_color" name="cover_color">
								<option value="0"> -- </option>
								<option value="1"> Black and White </option>
								<option value="2"> Colored </option>
								</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<!-- JOB SAMPLE -->
									{{ Form::label('job_sample', 'Job Sample') }}
									<br>
									{{ Form::open(array('url' => '/uploadfile','files'=>'true')) }}
									<br>
									{{ Form::file('job_sample') }}

									{{ Form::submit('Upload File',  ['class' => 'btn btn-primary btn-fill btn-wd', 'id'=>'upload']) }}

									@if(Request::hasFile('job_sample'))
									{{ Request::file('job_sample')->getClientOriginalName() }}

									@endif
									{{ Form::close() }}
									</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
								<!-- LAMINATION -->
									{{ Form::label('lamination', 'Lamination') }}
									<select class="form-control" id="lamination" name="lamination">
									<option value="0"> -- </option>
									<option value="1"> Matte (1-sided) </option>
									<option value="2"> Matte (2-sided) </option>
									<option value="3"> Plastic Lamination </option>
									<option value="4"> UV </option>
									</select>
								</div>
						</div>

						<div class="col-lg-6">
							<div class="form-group">
							<!-- BINDING -->
							{{ Form::label('binding', 'Binding') }}
							<select class="form-control" id="binding" name="binding">
								<option value="0"> -- </option>
								<option value="1"> Perfect </option>
								<option value="2"> Wire-O </option>
								<option value="3"> Saddle Stitch </option>
								<option value="4"> Padded Stitch </option>
								<option value="5"> Folded </option>
								<option value="6"> Smythsewn Perfect </option>
								<option value="6"> Smythsewn Hardbound </option>
							</select>
						</div>
					</div>
					</div>


					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<!-- DATE DUE -->
								{{ Form::label('date_due', 'Date Due') }}
								{{ Form::date('date_due', '', ['class' => 'form-control border-input','id'=>'datedue'])}}
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<!-- COMMENTS -->
								{{ Form::label('comments', 'Comments') }}
								{{ Form::textarea('comments', '', ['class' => 'form-control border-input', 'placeholder' => 'Place your comment here', 'row' => 5,'id'=>'comments'])}}
							</div>
						</div>
					</div>
					</div>
		</div>
	</div>
</div>
	<div class="text-center">
	<!-- SUBMUT BUTTON -->
	{{Form::submit('Submit Order', ['class' => 'btn btn-info btn-fill btn-wd', 'id'=>'submit'])}}
	</div>
</form>
<div class="clearfix"></div>

</div>
</div>
</div>
</div>
@endsection
