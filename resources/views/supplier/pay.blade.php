@extends('layout.main')

@section('title', "Pay Supplier")

@include('headers.purchasing')

@section('main-content')
<div class="content">
			<div class="row">
					<div class="col-md-12">
							<div class="card card-chart">
									<div class="card-header">
											<h5 class="card-category">Supplier</h5>
											<h4 class="card-title">Pay Supplier</h4>
									</div>

									<div class="card-body">
                    <center>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                    	{{ Form::label('supplier_name', 'Supplier Name') }}
                    	<select class="form-control" id="supplier_name" name="supplier_name">
                    	<option value="1"> -- </option>
                    	<option value="2"> Lamco Paper </option>
											<option value="3"> Triplex Enterprise </option>
											<option value="4"> Dhunwell Corporation </option>
											<option value="5"> Star Paper </option>
                    	</select>

											<button name = 'sel_supplier', class = 'btn btn- btn-fill btn-wd', id='sel_supplier'>
												Select </button>
                      </div>
                    </div>
                    </center>
											</div>


              <div class="col-md-12" id = 'cred_supplier-panel'>
    							<div class="card card-chart" id = 'cred_supplier'>
                    <div class="card-body">

                            <div class="row">
                          		<div class="col-md-6 pr-5">
                          			<div class="form-group">
                          				{{ Form::label('supplier_balance', 'Outstanding Balance (in PhP)') }}
                          				{{ Form::text('supplier_balance', 'Enter', [
                          					'class' => 'form-control border-input', 'id' => 'bal_supplier'
                          				])}}
                                  <br><br>
                          			</div>
                          		</div>

                              <div class="col-md-6 pr-5">
                          			<div class="form-group">
                          				{{ Form::label('supplier_pay', 'Amount Paid (in PhP)') }}
                          				{{ Form::text('supplier_pay', '', [
                          					'class' => 'form-control border-input', 'id' => 'bal_supplier',
                                    'placeholder' => 'Enter amount'
                          				])}}
                                  <br><br>
                          			</div>
                          		</div>
                              </div>

    								</div>
    							</div>
				</div>
			</div>
	</div>

</div>
</div>
@endsection
