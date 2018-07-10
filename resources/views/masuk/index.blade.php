@extends('layouts.admin')
@section('content')
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Surat Masuk
            <div class="panel-title pull-right">
              <a href="{{route('surat_masuk.create')}}" class="fa fa-plus"></a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No Surat</th>
                    <th>Tanggal Masuk</th>
                    <th>Instansi Pengirim</th>
                    <th>Perihal</th>
                    <th>Disposisi</th>
                    <th>Keterangan Disposisi</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($masuks as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->no_suratm }}</td>
                    <td>{{ $data->tgl_suratm }}</td>
                    <td>{{ $data->MInstansi->nama_instansi }}</td>
                    <td>{{ $data->perihalm }}</td>
                    <td>{{ $data->MDisposisi->disposisi }}</td>
                    <td>{{ $data->ket_disposisim }}</td>
                    <td>
                      <a href="{{ route('surat_masuk.edit', $data->id) }}" class="btn btn-outline-primary">Edit</a>
                    </td>
                    <td>
                      <a href="{{ route('surat_masuk.show', $data->id) }}" class="btn btn-outline-success">Show</a>
                    </td>
                    <td>
                      <form action="{{ route('surat_masuk.destroy', $data->id) }}" method="post">
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
  </div>
@endsection