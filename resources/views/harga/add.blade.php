@extends('layouts.app2')
 
@section('content')
<form class="mt-3" method="post" action="/barang/addProcess">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pembeli</label>
    <input type="text" class="form-control" name="namapembeli" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input Nama Pembeli" required>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kode Harga</label>
    <input type="text" class="form-control" name="kodeBarang" id="exampleInputPassword1" placeholder="Input Kode Barang" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah</label>
    <input type="number" class="form-control" name="jumlah" id="exampleInputPassword1" placeholder="Jumlah Barang Pembeli" required>
  </div>
  <button type="submit" class="btn btn-success" style="float:right">Simpan</button>
</form>
@endsection
