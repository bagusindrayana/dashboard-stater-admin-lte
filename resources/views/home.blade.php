@extends('layouts.app')

@section('content')

  <!-- Small boxes (Stat box) -->
  <div class="row"> 
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ Helper::jumlahUser() }}</h3>
          <p>User</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="{{ url('user') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <!-- chart -->
  <!-- <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Warga Perhari</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
               
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="revenue-chart" style="height: 300px;"></div>
            </div>
          </div>
    </div>
  </div> -->

@endsection
