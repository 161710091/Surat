@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-header">Edit Users
						<div class="panel-title pull-right">
							<a href="{{route('user.index')}}" class="fa fa-arrow-left"></a>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('user.update', $users->id) }}" method="post" enctype="multipart/form-data">
							<input type="hidden" name="_method" value="PATCH">
							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
								<label class="control-label">username</label>
								<input type="text" name="username" class="form-control" value="{{ $users->username }}" required>
								@if ($errors->has('username'))
									<span class="help-block">
										<strong>{{ $errors->first('username') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								<label class="control-label">name</label>
								<input type="text" name="name" class="form-control" value="{{ $users->name }}" required>
								@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Avatar</label>
                                @if (isset($users) && $users->avatar)
                                    <p>
                                        <br>
                                    <img src="{{ asset('assets/img/avatar/'.$users->avatar) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="avatar" type="file" value="{{ $users->avatar }}">
                            </div>

							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
								<label class="control-label">password</label>
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
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection