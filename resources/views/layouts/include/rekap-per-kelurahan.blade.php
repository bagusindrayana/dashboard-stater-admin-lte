<form class="form-inline" style="float: right;">
    <!-- <div class="form-group">
      
      <select class="form-control" id="kecamatan_id" name="kecamatan_id">
        <option value="" >Pilih semua Kecamatan</option>
        @foreach($kecamatans as $key => $kecamatan)
            <option value="{{ $key }}" @if(isset($_GET['kecamatan_id']) && $_GET['kecamatan_id'] == $key) selected @endif >{{ $kecamatan }}</option>
        @endforeach
      </select>
      
    </div>-->
    <div class="form-group">
      
      <select class="form-control" id="kelurahan_id" name="kelurahan_id">
        <option value="" >Pilih semua Kelurahan</option>
        @foreach($kelurahans as $key => $kelurahan)
            <option value="{{ $key }}" @if(isset($_GET['kelurahan_id']) && $_GET['kelurahan_id'] == $key) selected @endif >{{ $kelurahan }}</option>
        @endforeach
      </select>
      
    </div> 
     <!-- <div class="form-group">
      
      <select class="form-control" id="user_id" name="user_id">
        <option value="" >Pilih semua Pengguna</option>
        @foreach($users as $key => $user)
            <option value="{{ $key }}" @if(isset($_GET['user_id']) && $_GET['user_id'] == $key) selected @endif >{{ $user }}</option>
        @endforeach
      </select>
      
    </div> -->

    <div class="form-group">
        <input type="text" class="form-control" name="s" placeholder="Pencarian" value="@if(isset($_GET['s'])){{$_GET['s']}}@endif">
    </div>
    <button type="submit" class="btn btn-danger">Filter</button>
    <button type="submit" name="rekap" class="btn btn-primary" title="Export Ke Excel"><i class="fa fa-file-excel-o"></i></button>
</form>

