<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ env('APP_NAME') }} | {{ $title ?? "Home" }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">


  <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icon/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icon/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icon/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icon/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icon/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icon/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icon/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icon/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icon/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('icon/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('icon/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Morris charts -->
  <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
<!-- Site wrapper -->
<div class="wrapper">

  @include('layouts.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('layouts.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title ?? "Home" }}
        <small>{{ $subtitle ?? "" }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Menu</a></li>
        @if(isset($parent))
            <li><a href="{{ $link }}">{{ $parent }}</a></li>
        @endif
        @if(isset($title))
            <li ><a href="#">{{ $title }}</a></li>
        @endif
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
    @if(Session::has('error_message'))
        <div class="alert alert-danger">
            <span class="glyphicon glyphicon-error"></span>
            {!! session('error_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versi</b> 1.0.0
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="https://bagusindrayana.github.io">Bagus Indrayana</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
    @include('layouts.rightbar')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('js/jssor.slider-27.5.0.min.js') }}" type="text/javascript"></script>

<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
        // jssor_1_slider_init = function() {

        //     var jssor_1_SlideshowTransitions = [
        //       {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        //       {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
        //     ];

        //     var jssor_1_options = {
        //       $AutoPlay: 1,
        //       $SlideshowOptions: {
        //         $Class: $JssorSlideshowRunner$,
        //         $Transitions: jssor_1_SlideshowTransitions,
        //         $TransitionsOrder: 1
        //       },
        //       $ArrowNavigatorOptions: {
        //         $Class: $JssorArrowNavigator$
        //       },
        //       $ThumbnailNavigatorOptions: {
        //         $Class: $JssorThumbnailNavigator$,
        //         $SpacingX: 5,
        //         $SpacingY: 5
        //       }
        //     };

        //     var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        //     

        //     var MAX_WIDTH = 980;

        //     function ScaleSlider() {
        //         var containerElement = jssor_1_slider.$Elmt.parentNode;
        //         var containerWidth = containerElement.clientWidth;

        //         if (containerWidth) {

        //             var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

        //             jssor_1_slider.$ScaleWidth(expectedWidth);
        //         }
        //         else {
        //             window.setTimeout(ScaleSlider, 30);
        //         }
        //     }

        //     ScaleSlider();

        //     $Jssor$.$AddEvent(window, "load", ScaleSlider);
        //     $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        //     $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        //     
        // };
    </script>
    <script type="text/javascript">//jssor_1_slider_init();</script>
<script type="text/javascript">
  $(function () {
    $('.select2').select2();
    // if($("#revenue-chart").length){
    //   var arr = new Array();

    //   $.ajax({
    //     url: '{{ url("api/chart/get/7") }}',
    //     type: 'GET',
    //     success(res){
    //       console.log(res);
    //       $.each(res, function(index, val) {
    //          arr.push({y:val.tanggal,data_warga:val.data});
    //       });
    //       var area = new Morris.Area({
    //         element: 'revenue-chart',
    //         resize: true,
    //         data: arr,
    //         xkey: 'y',
    //         ykeys: ['data_warga'],
    //         labels: ['Data Warga'],
    //         lineColors: ['#a0d0e0'],
    //         hideHover: 'auto'
    //       });
    //     }
    //   });
      
      
    // }
      
    
  });


  jQuery(document).ready(function(){
   jQuery('#userTable').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'get',
      'ajax': {
          'url':'{{ url("api/data-table/user") }}'
      },
      'columns': [
         { data: 'no' },
         { data: 'name' },
         { data: 'email' },
         { data: 'no_telepon' },
         { data: 'role' },
         { data: 'aksi' }
      ]
   });
  });
</script>
</body>
</html>

