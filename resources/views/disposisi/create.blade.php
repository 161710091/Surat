@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">Add Disposisi
						<div class="panel-title pull-right">
							<a href="{{route('disposisi.index')}}" class="fa fa-arrow-left">Add</a>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('disposisi.store') }}" method="post">
							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('disposisi') ? 'has-error' : '' }}">
								<label class="control-label">Disposisi</label>
								<input type="text" name="disposisi" class="form-control" required>
								@if ($errors->has('disposisi'))
									<span class="help-block">
										<strong>{{ $errors->first('disposisi') }}</strong>
									</span>
								@endif
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