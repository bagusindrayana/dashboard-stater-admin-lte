@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{ $title }}</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{ url($link) }}">
            @include($link.'.form',['data'=>null])

            <div class="box-footer">
              <a href="{{ url($link) }}" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
    </div>
  </div>
@endsection
