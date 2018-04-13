@extends('layout.main')

@include('headers.main')

@section('title', 'Login')

@section('main-content')

<div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login
                  <center><img src = "{{ asset('img/logo1.png') }}" height = 40% width = 40%></center></div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 offset-md-6">
                              <center>
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                              </center>
                              </div>
                        </div>

                        <!--<div class="form-group">
                            <div class="col-md-12 offset-md-6">
                              <center>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                  <u>Forgot Your Password?</u>
                                </a>
                              </center>
                              </div>
                        </div> !-->

                        <div class="form-group">
                          <div class="col-md-12 offset-md-6">
                            <center>
                              <a class="btn btn-link" href="/register">
                                <u>Create an account</u>
                              </a>
                            </center>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
