@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-header">Edit Instansi
						<div class="panel-title pull-right">
							<a href="{{route('instansi.index')}}" class="fa fa-arrow-left"></a>
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('instansi.update', $ins->id) }}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{ csrf_field() }}

							<div class="form-group {{ $errors->has('nama_instansi') ? 'has-error' : '' }}">
								<label class="control-label">Nama Instansi</label>
								<input type="text" name="nama_instansi" class="form-control" value="{{ $ins->nama_instansi }}" required>
								@if ($errors->has('nama_instansi'))
									<span class="help-block">
										<strong>{{ $errors->first('nama_instansi') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('kab_kota') ? 'has-error' : '' }}">
								<label class="control-label">Kabupaten/Kota</label>
								<input type="text" name="kab_kota" class="form-control" value="{{ $ins->kab_kota }}" required>
								@if ($errors->has('kab_kota'))
									<span class="help-block">
										<strong>{{ $errors->first('kab_kota') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('telp') ? 'has-error' : '' }}">
								<label class="control-label">Telepon</label>
								<input type="number" name="telp" class="form-control" value="{{ $ins->telp }}" required>
								@if ($errors->has('telp'))
									<span class="help-block">
										<strong>{{ $errors->first('telp') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
								<label class="control-label">E-mail</label>
								<input type="text" name="email" class="form-control" value="{{ $ins->email }}" required>
								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
								<label class="control-label">Alamat</label>
								<input type="text" name="alamat" class="form-control" value="{{ $ins->alamat }}" required>
								@if ($errors->has('alamat'))
									<span class="help-block">
										<strong>{{ $errors->first('alamat') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('kepala') ? 'has-error' : '' }}">
								<label class="control-label">Kepala</label>
								<input type="text" name="kepala" class="form-control" value="{{ $ins->kepala }}" required>
								@if ($errors->has('kepala'))
									<span class="help-block">
										<strong>{{ $errors->first('kepala') }}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{ $errors->has('nip_kepala') ? 'has-error' : '' }}">
								<label class="control-label">NIP Kepala</label>
								<input type="number" name="nip_kepala" class="form-control" value="{{ $ins->nip_kepala }}" required>
								@if ($errors->has('nip_kepala'))
									<span class="help-block">
										<strong>{{ $errors->first('nip_kepala') }}</strong>
									</span>
								@endif
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