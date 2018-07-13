@extends('layouts.app')
@section('css')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dist/css/main.css') }}">
@endsection
@section('js')
    <script src="{{ asset('assets/dist/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/dist/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/dist/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/main.js') }}"></script>
@endsection
@section('content')
    <div class="limiter">
        <div class="container-login100" style="background-image: url('assets/dist/images/img-01.jpg');">
            <div class="wrap-login100 p-t-150 p-b-30">
                <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-t-20 p-b-45">
                        Reset Password
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                        <input id="username" type="username" class="form-control input100{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button type="submit" class="login100-form-btn">
                                    {{ __('Send Password Reset Link') }}
                        </button>
                    </div>

                    <div class="text-center w-full p-t-25 p-b-100">
                        <a href="#" class="txt1">
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->