@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-header">Edit Data Disposisi
						<div class="panel-title pull-right">
							<a href="{{route('disposisi.index')}}" class="fa fa-arrow-left"></a>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('disposisi.update', $dis->id) }}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('disposisi') ? 'has-error' : '' }}">
								<label class="control-label">Disposisi</label>
								<input type="text" name="disposisi" class="form-control" value="{{ $dis->disposisi }}" required>
								@if ($errors->has('disposisi'))
									<span class="help-block">
										<strong>{{ $errors->first('disposisi') }}</strong>
									</span>
								@endif
							</div>

							<div>
								<button type="submit" class="btn btn-outline-primary">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection