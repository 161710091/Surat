@extends('layouts.admin')
@section('content')
@role('Super Admin')
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Surat Keluar
            <div class="card-title pull-right">
              <a href="{{route('surat_keluar.create')}}" class="fa fa-plus"></a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>No Surat</th>
                  <th>Dikirim</th>
                  <th>Pengirim</th>
                  <th>Perihal</th>
                  <th>Dituju</th>
                  <th>Alamat</th>
                  <th>Disposisi</th>
                  <th>Keterangan Disposisi</th>
                  <th colspan="3">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($keluars as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->no_suratk }}</td>
                  <td>{{ $data->created_at }}</td>
                  <td>{{ $data->pengirimk }}</td>
                  <td>{{ $data->perihalk }}</td>
                  <td>{{ $data->KInstansi->nama_instansi }}</td>
                  <td>{{ $data->alamatk }}</td>
                  <td>{{ $data->KDisposisi->disposisi }}</td>
                  <td>{{ $data->ket_disposisik }}</td>
                  <td>
                    <a href="{{ route('surat_keluar.edit', $data->id) }}" class="btn btn-outline-primary">Edit</a>
                  </td>
                  <td>
                    <a href="{{ route('surat_keluar.show', $data->id) }}" class="btn btn-outline-success">Show</a>
                  </td>
                  <td>
                    <form action="{{ route('surat_keluar.destroy', $data->id) }}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="btn btn-outline-danger">Delete</button>
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
  @else
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Surat Keluar
            <div class="card-title pull-right">
              <a href="{{route('surat_keluar.create')}}" class="fa fa-plus"></a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>No Surat</th>
                  <th>Dikirim</th>
                  <th>Pengirim</th>
                  <th>Perihal</th>
                  <th>Dituju</th>
                  <th>Alamat</th>
                  <th>Disposisi</th>
                  <th>Keterangan Disposisi</th>
                  <th colspan="3">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($keluars as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->no_suratk }}</td>
                  <td>{{ $data->created_at }}</td>
                  <td>{{ $data->pengirimk }}</td>
                  <td>{{ $data->perihalk }}</td>
                  <td>{{ $data->KInstansi->nama_instansi }}</td>
                  <td>{{ $data->alamatk }}</td>
                  <td>{{ $data->KDisposisi->disposisi }}</td>
                  <td>{{ $data->ket_disposisik }}</td>
                  <td>
                    <a href="{{ route('surat_keluar.show', $data->id) }}" class="btn btn-outline-success">Show</a>
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
  @endrole
@endsection