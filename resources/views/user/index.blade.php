@extends('layouts.app')

@section('content')

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Data {{$title}}</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
      
    </div>
  </div>
  <div class="box-body">
    <!-- @include('layouts.include.cari') -->
    <a href="{{ url($link.'/create') }}" class="btn btn-sm btn-primary" title="Tambah Data {{ $title }}"><i class="fa fa-plus"></i></a>
   
    <table class="table table-bordered table-hover" id="userTable">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>No Telepon</th>
          <th>Role</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
</div>

@endsection