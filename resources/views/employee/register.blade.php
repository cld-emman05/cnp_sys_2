@extends('layout.main')
@include('headers.main')

@section('title', 'Add New Employee')

@section('main-content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <a href = '/employee'>
      							<btn class = 'btn btn-primary' id = 'return'>
      							<i class="now-ui-icons arrows-1_minimal-left"></i> Return</btn>
      						</a>
                  <h5 class="card-category">Manage Employees</h5>
                  <h4 class="card-title">Add Employee</h4>
                </div>

                <div class="card-body">
                  {!! Form::open(['url' => '/employee/store', 'method' => 'post']) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus
                                placeholder="Juan">

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus
                                placeholder="de la Cruz">

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                          {{ Form::label('user_type', 'Employee Type', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                          <div class="col-md-6">
                          	<select class="form-control" id="user_type" name="user_type" required autofocus>
                            	<option value = null> -- </option>
                                @foreach($departments as $dept)
                                  @if(!($loop->first))
                            	   <option value="{{$dept['id']}}"> {{$dept['name']}} </option>
                                 @endif
                              @endforeach
                          	</select>

                          @if ($errors->has('user_type'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('user_type') }}</strong>
                                </span>
                            @endif
                        </div>

                      </div>

                      <div class="form-group row">
                        {{ Form::label('industry', 'Industry', ['class' => 'col-md-4 col-form-label text-md-right']) }}
                        <div class="col-md-6">
                          <select class="form-control" id="industry" name="industry" required autofocus>
                            <option value = null> -- </option>
                              @foreach($industries as $industry)
                               <option value="{{$industry['id']}}"> {{$industry['type']}} </option>
                            @endforeach
                          </select>

                        @if ($errors->has('industry'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('industry') }}</strong>
                              </span>
                          @endif
                      </div>
                    </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Residential Address</label>

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

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required
                                placeholder="example@domain.com">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                                placeholder="must be at least 6-digits">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>{!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection
