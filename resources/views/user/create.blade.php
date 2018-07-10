@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Add Users
            <div class="panel-title pull-right">
              <a href="{{route('user.index')}}" class="fa fa-arrow-left"></a>
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                <label class="control-label">Username</label>
                <input type="text" name="username" class="form-control" required>
                @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label class="control-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" required>
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
                <label class="control-label">Avatar</label>
                <input type="file" name="avatar" class="form-control" required>
                @if ($errors->has('avatar'))
                  <span class="help-block">
                    <strong>{{ $errors->first('avatar') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label class="control-label">Password</label>
                <input type="password" name="password" class="form-control" required>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                  <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>

              <div>
                <button type="submit" class="btn btn-outline-primary">OK</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection