@extends('layout.main')

@section('title', "Create Quotations")

@include('headers.quotation')

@section('main-content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-chart">
			<div class = 'card-header'>
				<table class="table table-hover" style="width:100%">
					<div class="card-header">
						<a href = '/quotation'>
							<btn class = 'btn btn-primary' id = 'return'>
							<i class="now-ui-icons arrows-1_minimal-left"></i> Return</btn>
						</a>
          <h5 class='card-category'>Quotation</h5>
            <h4 class="card-title">Create Quotation</h4>
          </div>

					<div class = 'card-body'>
						<div class col-lg-12 md-4>
							<!-- PRICE COMPUTATIONS -->
							<table  class="table table-hover" style="width:100%">
								<col width="130">
								<col width="80">
								<thead>
									<th width="25%">Quotation #</th>
									<th width="25%">Title of Job</th>
								</thead>

								<tbody>
									<tr>
										<input type = 'hidden' name = 'order_id' value = '{{ $orders-> id}}'> </input>
									<td> 1 </td>
									<td> {{ $orders->title }}</td>
								</tbody>
							</table>
						</div>
						<div class="col-lg-12 md-4">
							<div class = 'card card-chart'>
								<div class="card-body">
							<center><h2 class="title">Price Computations</h2>
							</center>
						<div class="content table-responsive table-full-width">
							<table class="table table-striped" style="width:100%">
							<col width="130">
							<col width="80">

							<form method="POST" action = "/quotation/store/">
								{{ csrf_field() }}
							<thead>
							<th width="25%"></th>
							<th width="25%">Specification</th>
							<th width="25%">Price</th>
							</thead>

							<tbody>

							<tr>
							<td><b>{{ Form::label('quantity', 'Quantity') }}<b></td>
							<td width="25%">{{ Form::text('quantity', $orders->quantity , ['class' => 'form-control border-input col-lg-6 col-lg-6', 'placeholder' => 'How many orders?', 'id'=>'quantity'])}}
							<td> </td>
							</tr>

							<tr>
							<td><b>{{ Form::label('# Of Pages', 'Number of Pages') }}<b></td>
							<td width="25%">{{ Form::text('pagenumber', $orders->specification->pages , ['class' => 'form-control border-input col-lg-6 col-lg-6', 'placeholder' => 'How many pages?', 'id'=>'pagenumber'])}}
							<td></td>
							</tr>


							<tr>
							<td><b>Stocks</b></td>
							<td></td>
							<td></td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('cover_stock_price', 'Cover') }}</td>
							<td> {{ $orders->specification->coverPaper->paper_type->name }}/{{ $orders->specification->coverColor->name }} </td>
							<td width="25%">{{ Form::text('cover_stock_price','', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'coverstockP'])}}
							</td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('inside_stock_price', 'Inside') }}</td>
							<td>{{ $orders->specification->insidePaper->paper_type->name }}/{{ $orders->specification->insideColor->name }}</td>
							<td width="25%">{{ Form::text('inside_stock_price', '', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'insidestockP'])}}
							</td>
							</tr>

							<tr>
							<td><b>Offset Running</b></td>
							<td>{{ $orders->specification->size->dimension }}</td>
							<td></td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('cover_offset_price', 'Cover') }}</td>
							<td> </td>
							<td width="25%">{{ Form::text('cover_offset_price', '', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'coveroffsetP'])}}
							</td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('inside_offset_price', 'Inside') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('inside_offset_price', '', ['class' => 'form-control border-input col-lg-6 ', 'placeholder' => 'How much?', 'id'=>'insideoffsetP'])}}
							</td>
							</tr>

							<tr>
							<td style="text-indent:30pt">{{ Form::label('other_offset_price', 'Others') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('other_offset_price', '', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'otheroffsetP'])}}
							</td>
							</tr>

							<tr>
							<td><b>{{ Form::label('lamination_price', 'Lamination') }}</b></td>
							<td>{{ $orders->specification->lamination->name }}</td>
							<td width="25%">{{ Form::text('lamination_price', '', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'laminationP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('letterpress_price', 'Letterpress Running') }}</td>
							<td> </td>
							<td width="25%">{{ Form::text('letterpress_price', '', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'letterpressP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('binding_price', 'Binding') }}</td>
							<td>{{ $orders->specification->binding->name }}  </td>
							<td width="25%">{{ Form::text('binding_price', '', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'bindingP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('diecut_price', 'Die Cutting/Blades/Cliche') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('diecut_price', '', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'diecutP'])}}
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('diecut_run_price', 'Diecutting Running') }}</td>
							<td>  </td>
							<td width="25%">{{ Form::text('diecut_run_price', '', ['class' => 'form-control border-input col-lg-6', 'placeholder' => 'How much?', 'id'=>'diecutrunningP'])}}
							</td>
							</tr>


							<tr></tr>
							<tr></tr>

							<tr>
							<td>{{ Form::label('TotalAll', 'Total (PhP)') }}</td>
							<td></td>
							<td>
							<input type = 'text' class="form-control border-input col-lg-6" id='TotalAll' name='TotalAll'/>
							</td>
							</tr>

							<tr>
							<td>{{ Form::label('UnitCost', 'Unit Cost (PhP)') }}</td>
							<td></td>
							<td><input type = 'text' class="form-control border-input col-lg-6" id='UnitCost' name='UnitCost'/></td></td>
							</tr>
							</tbody>
              <tr></tr>
						</table>
						<div class="container-fluid text-center">
							{{Form::submit('Post', ['class' => 'btn btn-success btn-fill btn-wd pull-right', 'id' => 'post-quote'])}}
						</form>
            <button class="btn btn-info btn-wd btn-fill pull-left" id='calculate'>Compute</button>
          </div>
						<div>
				</div>
			</div>
		</div>
@endsection
