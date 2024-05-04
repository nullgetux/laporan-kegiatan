@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Laporan')
@section('content_header_title', 'Laporan')
@section('content_header_subtitle', 'Buat Laporan')

{{-- Content body: main page content --}}

@section('content_body')
    <!-- general form elements -->
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulir Laporan Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('laporan.store') }}" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                @if ($errors->any())
                      <div class="alert alert-danger">
                        <div class="alert-title"><h4>Whoops!</h4></div>
                          There are some problems with your input.
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div> 
                    @endif

                    @if (session('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                      <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                  <div class="form-group">
                    <label for="name">Nama Pelanggan</label>
                    <input name="name" value="{{ old('name') }}"class="form-control" id="name" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="idpel">ID Pelanggan</label>
                    <input name="idpel" value="{{ old('idpel') }}"class="form-control" id="idpel" placeholder="Masukan ID Pelanggan">
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input name="keterangan" value="{{ old('keterangan') }}"class="form-control" id="keterangan" placeholder="Masukan Keterangan">
                  </div>
                  <div class="form-group">
                    <label for="bukti">Upload Foto Bukti</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="bukti" name="bukti">
                        <label class="custom-file-label" for="bukti">Pilih Foto</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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