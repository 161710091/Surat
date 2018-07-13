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
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-t-20 p-b-45">
                        Welcome
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                        <input id="username" type="text" class="form-control input100{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="username">

                                @if ($errors->has('username'))
                                @endif

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        <input id="password" type="password" class="form-control input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                        </button>
                    </div>

                    <div class="text-center w-full p-t-25 p-b-100">
                        <a href="{{ route('password.request') }}" class="txt1">
                            Forgot Username / Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection