@extends('layouts.admin')
@section('content')
  <div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">Disposisi
            <div class="panel-title pull-right">
              <a href="{{route('disposisi.create')}}" class="fa fa-plus"></a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Disposisi</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($dis as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->disposisi }}</td>
                    <td>
                      <a href="{{ route('disposisi.edit', $data->id) }}" class="btn btn-outline-primary">Edit</a>
                    </td>
                    <td>
                      <form action="{{ route('disposisi.destroy', $data->id) }}" method="post">
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