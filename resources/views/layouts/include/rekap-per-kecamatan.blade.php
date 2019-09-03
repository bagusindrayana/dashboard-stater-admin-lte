<form class="form-inline" style="float: right;">
     <div class="form-group">
      
      <select class="form-control" id="kecamatan_id" name="kecamatan_id">
        <option value="" >Pilih semua Kecamatan</option>
        @foreach($kecamatans as $key => $kecamatan)
            <option value="{{ $key }}" @if(isset($_GET['kecamatan_id']) && $_GET['kecamatan_id'] == $key) selected @endif >{{ $kecamatan }}</option>
        @endforeach
      </select>
      
    </div>
   

    <div class="form-group">
        <input type="text" class="form-control" name="s" placeholder="Pencarian" value="@if(isset($_GET['s'])){{$_GET['s']}}@endif">
    </div>
    <button type="submit" class="btn btn-danger">Filter</button>
    <button type="submit" name="rekap" class="btn btn-primary" title="Export Ke Excel"><i class="fa fa-file-excel-o"></i></button>
</form>

