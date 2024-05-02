@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Laporan')
@section('content_header_title', 'Laporan')
@section('content_header_subtitle', 'Details Laporan')

{{-- Content body: main page content --}}

@section('content_body')
<!-- About Me Box -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Laporan Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Nama</strong>

                <p class="text-muted">
                    {{$laporan->name}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> ID Pelanggan</strong>

                <p class="text-muted">{{$laporan->idpel}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Keterangan</strong>

                <p class="text-muted">{{$laporan->keterangan}}</p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Bukti Foto</strong>

                <p class="text-muted"><img src="{{ asset($laporan->bukti) }}" class="img-thumbnail" style="width:500px" /></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush