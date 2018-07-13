@extends('layouts.admin')
@section('content')
    <div class="row">
      <div class="container-fluid">
        <div class="col-md-12">
          <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title">Read Mail</h3>

              <div class="card-tools">
                <a href="{{route('surat_keluar.index')}}" class="fa fa-arrow-left" style="color: green;"></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5>No Surat :
                  {{ $keluars->no_suratk }}<br>
                  Perihal :
                  {{ $keluars->perihalk }}
                </h5>
                <h6>Dari: {{ $keluars->pengirimk }} <br>
                    Ke: {{ $keluars->KInstansi->nama_instansi }}
                  <span class="mailbox-read-time float-right">{{ $keluars->created_at }}</span></h6>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
              <ul class="mailbox-attachments clearfix">
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="{{ asset('/assets/file/file-keluar'.$keluars->filek.'') }}" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> {{ $keluars->filek }}</a>
                        <span class="mailbox-attachment-size">
                          {{ File::size(public_path('assets/file/file-keluar/'.$keluars->filek.'')) }}
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection