@extends('layout.main')

@section('title', 'Add New Suppliers')
@include('headers.main')

@section('main-content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <a href = '/supplier'>
        						<btn class = 'btn btn-primary' id = 'return'>
        						<i class="now-ui-icons arrows-1_minimal-left"></i> Return</btn>
        					</a>
                  <h5 class="card-category">Suppliers</h5>
                  <h4 class="card-title">Add Suppliers</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="supplier_name" class="col-md-4 col-form-label text-md-right">Supplier Name</label>

                            <div class="col-md-6">
                                <input id="supplier_name" type="text" class="form-control{{ $errors->has('supplier_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('supplier_name') }}" required autofocus
                                placeholder="Cattleya Papers">

                                @if ($errors->has('supplier_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('supplier_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cred_limit" class="col-md-4 col-form-label text-md-right">Credit Limit (in PhP)</label>

                            <div class="col-md-6">
                                <input id="cred_limit" type="number" min = '1000000' class="number form-control{{ $errors->has('cred_limit') ? ' is-invalid' : '' }}" name="cred_limit" required autofocus></input>

                                @if ($errors->has('cred_limit'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cred_limit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                          {{ Form::label('pay_term', 'Payment Terms (in days)', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                          <div class="col-md-6">
                          	<select class="form-control" id="pay_term" name="pay_term" required autofocus>
                              <option value="0"> -- </option>
                              <option value="1"> 30</option>
                            	<option value="2"> 60</option>
                              <option value="3"> 90</option>
                              <option value="4"> 120</option>
                          	</select>

                          @if ($errors->has('user_type'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('user_type') }}</strong>
                                </span>
                            @endif
                        </div>

                      </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Supplier Address</label>

                            <div class="col-md-6">
                                <textarea id="address" row = '2' class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus
                                >
                                </textarea>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">Contact Number</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control{{ $errors->has("contact") ? ' is-invalid' : '' }}" name="contact" value="{{ old("contact") }}"
                                placeholder="09xxxxxxxxx">

                                @if ($errors->has("contact"))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first("contact") }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
