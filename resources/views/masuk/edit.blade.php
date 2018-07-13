@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-header">Edit Surat Masuk
						<div class="panel-title pull-right">
							<a href="{{route('surat_masuk.index')}}" class="fa fa-arrow-left"></a>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('surat_masuk.update', $masuks->id) }}" method="post" enctype="multipart/form-data">
							<input type="hidden" name="_method" value="PATCH">
							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('no_suratm') ? 'has-error' : '' }}">
								<label class="control-label">no_suratm</label>
								<input type="text" name="no_suratm" class="form-control" value="{{ $masuks->no_suratm }}" required>
								@if ($errors->has('no_suratm'))
									<span class="help-block">
										<strong>{{ $errors->first('no_suratm') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('id_instansi') ? 'has-error' : '' }}">
								<label class="control-label">Instansi Pengirim</label>
								<select name="id_instansi" class="form-control" required>
									@foreach($ins as $data)
										<option value="{{ $data->id }}" {{ $selectedins == $data->id ? 'selected="selected"' : '' }}>
											{{ $data->nama_instansi }}
										</option>
									@endforeach
								</select>
								@if($errors->has('id_instansi'))
									<span class="help-block">
										<strong>{{ $errors->first('id_instansi') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('perihalm') ? 'has-error' : '' }}">
								<label class="control-label">perihalm</label>
								<input type="text" name="perihalm" class="form-control" value="{{ $masuks->perihalm }}" required>
								@if ($errors->has('perihalm'))
									<span class="help-block">
										<strong>{{ $errors->first('perihalm') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('id_disposisi') ? 'has-error' : '' }}">
								<label class="control-label">Disposisi</label>
								<select name="id_disposisi" class="form-control" required>
									@foreach($dis as $data)
										<option value="{{ $data->id }}" {{ $selecteddis == $data->id ? 'selected="selected"' : '' }}>
											{{ $data->disposisi }}
										</option>
									@endforeach
								</select>
								@if($errors->has('id_disposisi'))
									<span class="help-block">
										<strong>{{ $errors->first('id_disposisi') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('ket_disposisim') ? 'has-error' : '' }}">
								<label class="control-label">ket_disposisim</label>
								<input type="text" name="ket_disposisim" class="form-control" value="{{ $masuks->ket_disposisim }}" required>
								@if ($errors->has('ket_disposisim'))
									<span class="help-block">
										<strong>{{ $errors->first('ket_disposisim') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('filem') ? 'has-error' : '' }}">
								<label class="control-label">filem</label>
								<input type="file" name="filem" class="form-control" value="{{ $masuks->filem }}" required>
								@if ($errors->has('filem'))
									<span class="help-block">
										<strong>{{ $errors->first('filem') }}</strong>
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