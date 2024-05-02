@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Dashboard')
@section('content_header_title', 'Home')

{{-- Content body: main page content --}}

@section('content_body')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
      <div class="card-tools">
        <ul class="nav nav-pills ml-auto">
            <li class="nav-item">
                <a class="btn btn-success float-right" href="#">
                    Export Xlsx
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary float-right" href="{{ route('laporan.create') }}">
                    Add New
                </a>
            </li>
        </ul>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>ID Pelanggan</th>
          <th>Keterangan</th>
          <th>Bukti</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($laporan as $laporan)
        <tr>
          <td>{{ $laporan->id }}</td>
          <td>{{ $laporan->name }}</td>
          <td>{{ $laporan->idpel }}</td>
          <td>{{ $laporan->keterangan}}</td>
          <td><img src="{{ asset($laporan->bukti) }}" class="img-thumbnail" style="width:200px" /></td>
          <td>xxx</td>
        </tr>
        @empty
        <tr>
          <td colspan="6">
          No record found!
          </td>
        </tr>
        @endforelse
        </tbody>
      </table>
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