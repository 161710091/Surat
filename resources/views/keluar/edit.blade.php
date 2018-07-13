@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-header">Edit Surat Keluar
						<div class="panel-title pull-right">
							<a href="{{route('surat_keluar.index')}}" class="fa fa-arrow-left"></a>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('surat_keluar.update', $keluars->id) }}" method="post" enctype="multipart/form-data">
							<input type="hidden" name="_method" value="PATCH">
							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('no_suratk') ? 'has-error' : '' }}">
								<label class="control-label">No Surat</label>
								<input type="text" name="no_suratk" class="form-control" value="{{ $keluars->no_suratk }}" required>
								@if ($errors->has('no_suratk'))
									<span class="help-block">
										<strong>{{ $errors->first('no_suratk') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('pengirimk') ? 'has-error' : '' }}">
								<label class="control-label">Pengirim</label>
								<input type="text" name="pengirimk" class="form-control" value="{{ $keluars->pengirimk }}" required>
								@if ($errors->has('pengirimk'))
									<span class="help-block">
										<strong>{{ $errors->first('pengirimk') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('perihalk') ? 'has-error' : '' }}">
								<label class="control-label">Perihal</label>
								<input type="text" name="perihalk" class="form-control" value="{{ $keluars->perihalk }}" required>
								@if ($errors->has('perihalk'))
									<span class="help-block">
										<strong>{{ $errors->first('perihalk') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('id_instansi') ? 'has-error' : '' }}">
								<label class="control-label">Dituju</label>
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

							<div class="form-group {{ $errors->has('alamatk') ? 'has-error' : '' }}">
								<label class="control-label">Alamat</label>
								<input type="text" name="alamatk" class="form-control" value="{{ $keluars->alamatk }}" required>
								@if ($errors->has('alamatk'))
									<span class="help-block">
										<strong>{{ $errors->first('alamatk') }}</strong>
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

							<div class="form-group {{ $errors->has('ket_disposisik') ? 'has-error' : '' }}">
								<label class="control-label">Keterangan Disposisi</label>
								<input type="text" name="ket_disposisik" class="form-control" value="{{ $keluars->ket_disposisik }}" required>
								@if ($errors->has('ket_disposisik'))
									<span class="help-block">
										<strong>{{ $errors->first('ket_disposisik') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('filek') ? 'has-error' : '' }}">
								<label class="control-label">Filek</label>
								<input type="file" name="filek" class="form-control" value="{{ $keluars->filek }}" required>
								@if ($errors->has('filek'))
									<span class="help-block">
										<strong>{{ $errors->first('filek') }}</strong>
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