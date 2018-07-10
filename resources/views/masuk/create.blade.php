@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">Add Surat Masuk
						<div class="panel-title pull-right">
							<a href="{{route('surat_masuk.index')}}" class="fa fa-arrow-left"></a>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('surat_masuk.store') }}" method="post" enctype="multipart/data-form">
							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('no_suratm') ? 'has-error' : '' }}">
								<label class="control-label">No Surat</label>
								<input type="text" name="no_suratm" class="form-control" required>
								@if ($errors->has('no_suratm'))
									<span class="help-block">
										<strong>{{ $errors->first('no_suratm') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('tgl_suratm') ? 'has-error' : '' }}">
								<label class="control-label">Tanggal Masuk</label>
								<input type="date" name="tgl_suratm" class="form-control" required>
								@if ($errors->has('tgl_suratm'))
									<span class="help-block">
										<strong>{{ $errors->first('tgl_suratm') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('id_instansi') ? 'has-error' : '' }}">
								<label class="control-label">Instansi Pengirim</label>
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

							<div class="form-group {{ $errors->has('perihalm') ? 'has-error' : '' }}">
								<label class="control-label">Perihal</label>
								<input type="text" name="perihalm" class="form-control" required>
								@if ($errors->has('perihalm'))
									<span class="help-block">
										<strong>{{ $errors->first('perihalm') }}</strong>
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

							<div class="form-group {{ $errors->has('ket_disposisim') ? 'has-error' : '' }}">
								<label class="control-label">Keterangan Disposisi</label>
								<input type="text" name="ket_disposisim" class="form-control" required>
								@if ($errors->has('ket_disposisim'))
									<span class="help-block">
										<strong>{{ $errors->first('ket_disposisim') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('filem') ? 'has-error' : '' }}">
								<label class="control-label">File</label>
								<input type="file" name="filem" class="form-control" required>
								@if ($errors->has('filem'))
									<span class="help-block">
										<strong>{{ $errors->first('filem') }}</strong>
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