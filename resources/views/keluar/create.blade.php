@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">Add Surat Keluar
						<div class="panel-title pull-right">
							<a href="{{route('surat_keluar.index')}}" class="fa fa-arrow-left"></a>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('surat_keluar.store') }}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('no_suratk') ? 'has-error' : '' }}">
								<label class="control-label">No Surat</label>
								<input type="text" name="no_suratk" class="form-control" required>
								@if ($errors->has('no_suratk'))
									<span class="help-block">
										<strong>{{ $errors->first('no_suratk') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('pengirimk') ? 'has-error' : '' }}">
								<label class="control-label">Pengirim</label>
								<input type="text" name="pengirimk" class="form-control" required>
								@if ($errors->has('pengirimk'))
									<span class="help-block">
										<strong>{{ $errors->first('pengirimk') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('perihalk') ? 'has-error' : '' }}">
								<label class="control-label">Perihal</label>
								<input type="text" name="perihalk" class="form-control" required>
								@if ($errors->has('perihalk'))
									<span class="help-block">
										<strong>{{ $errors->first('perihalk') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('id_instansi') ? 'has-error' : '' }}">
								<label class="control-label">Dituju</label>
								<select name="id_instansi" class="form-control" required>
									<option>Pilih Instansi</option>
									@foreach($ins as $data)
										<option value="{{ $data->id }}">
											{{ $data->nama_instansi }}
										</option>
									@endforeach
								</select>
								@if ($errors->has('id_instansi'))
									<span class="help-block">
										<strong>{{ $errors->first('id_instansi') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('alamatk') ? 'has-error' : '' }}">
								<label class="control-label">alamat</label>
								<input type="text" name="alamatk" class="form-control" required>
								@if ($errors->has('alamatk'))
									<span class="help-block">
										<strong>{{ $errors->first('alamatk') }}</strong>
									</span>
								@endif
							</div>


							<div class="form-group {{ $errors->has('id_disposisi') ? 'has-error' : '' }}">
								<label class="control-label">Disposisi</label>
								<select name="id_disposisi" class="form-control" required>
									<option>Pilih Disposisi</option>
									@foreach($dis as $data)
										<option value="{{ $data->id }}">
											{{ $data->disposisi }}
										</option>
									@endforeach
								</select>
								@if ($errors->has('id_disposisi'))
									<span class="help-block">
										<strong>{{ $errors->first('id_disposisi') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('ket_disposisik') ? 'has-error' : '' }}">
								<label class="control-label">Keterangan Disposisi</label>
								<input type="text" name="ket_disposisik" class="form-control" required>
								@if ($errors->has('ket_disposisik'))
									<span class="help-block">
										<strong>{{ $errors->first('ket_disposisik') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('filek') ? 'has-error' : '' }}">
								<label class="control-label">File</label>
								<input type="file" name="filek" class="form-control" required multiple>
								@if ($errors->has('filek'))
									<span class="help-block">
										<strong>{{ $errors->first('filek') }}</strong>
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