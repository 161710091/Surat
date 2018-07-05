@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Surat Masuk
						<div class="panel-title pull-right">
							<a href="{{route('surat_masuk.create')}}">Tambah</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Nama</th>
										<th>NIPD</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach ($masuks as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->nama }}</td>
										<td>{{ $data->nipd }}</td>
										<td>
											<a href="{{ route('surat_masuk.edit', $data->id) }}" class="btn btn-warning">Edit</a>
										</td>
										<td>
											<a href="{{ route('surat_masuk.show', $data->id) }}" class="btn btn-success">Show</a>
										</td>
										<td>
											<form action="{{ route('surat_masuk.destroy', $data->id) }}" method="post">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<input type="hidden" name="_method" value="DELETE">
												<button type="submit" class="btn btn-danger">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection