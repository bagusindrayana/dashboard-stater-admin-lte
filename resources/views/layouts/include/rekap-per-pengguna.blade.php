<form class="form-inline" style="float: right;">
   
    <div class="form-group">
      
      <select class="form-control" id="user_id" name="user_id">
        <option value="" >Pilih semua Pengguna</option>
        @foreach($users as $key => $user)
            <option value="{{ $key }}" @if(isset($_GET['user_id']) && $_GET['user_id'] == $key) selected @endif >{{ $user }}</option>
        @endforeach
      </select>
      
    </div>
	<!-- <div class="form-group">
        <div class="input-group">
	      <div class="input-group-addon">
	        <i class="fa fa-calendar"></i>
	      </div>
	      <input type="text" name="periode" class="form-control pull-right" id="reservation" value="@if(isset($_GET['periode'])){{$_GET['periode']}}@endif">
	    </div>
    </div> -->
    <div class="form-group">
        <input type="text" class="form-control" name="s" placeholder="Pencarian" value="@if(isset($_GET['s'])){{$_GET['s']}}@endif">
    </div>
    <button type="submit" class="btn btn-danger">Filter</button>
    <button type="submit" name="rekap" class="btn btn-primary" title="Export Ke Excel"><i class="fa fa-file-excel-o"></i></button>
</form>

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript">
  $(function () {
    
    $('#reservation').daterangepicker();
  });
</script>