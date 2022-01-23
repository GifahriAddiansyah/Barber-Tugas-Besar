@extends('admin.apps')

<?php $no = 1; ?>
@section('contents')
    <h3>Data Stok</h3>
    <!-- <a href="/toko/create" class="btn btn-success"> Tambah Data</a> -->
    <button type='button' class='btn btn-primary ml-3' data-toggle="modal" data-target="#tambah"> Tambah Data</button>
    <div class="col-sm-12">

        @if (session()->get('success'))
            <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div>
        @endif
    </div>


    <table class="table table-striped mt-3">
        <thead>
            <tr>
               
                <th> Kode </th>
                <th> Nama Menu </th>
                <th> Harga </th>
                <th colspan=2></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hargas as $harga)
                <tr>
                    <td> {{ $no++ }}</td>
                    <td> {{ $harga->kode }}</td>
                    <td> {{ $harga->nama_menu }}</td>
                    <td> {{ $harga->harga }}</td>
                    <td>
                        <a  data-toggle="modal" data-id="{{ $harga->id }}" data-kode="{{ $harga->kode }}" data-nama="{{ $harga->nama_menu }}" data-harga="{{ $harga->harga }}" data-target="#edit" class="btn btn-primary btnEdit text-light"> Edit</a>
                    </td>
                    <td>
                        <form action="/harga/{{ $harga->kode }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div id='tambah'  class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content"> 
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="/toko">
            @csrf
                        <div class="form-group">
                <label for="name"> Nama Barang </label>
                   <input type="text" class="form-control" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="name"> Jumlah </label>
                <input type="number" class="form-control" name="jumlah">
            </div>
            <div class="form-group">
                <label for="name"> Tanggal Masuk </label>
                <input type="date" class="form-control" name="tanggal_masuk">
            </div>
            <div class="form-group">
                <label for="name"> Harga Satuan</label>
                <input type="number" class="form-control" name="harga_satuan">
            </div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>


<div id='edit'  class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" id="formEdit">
            @csrf
            @method('PUT')
                        <div class="form-group">
                <label for="name"> Nama Barang </label>
                <input type="text" class="form-control" name="nama_barang" id="namaBarang">
            </div>
            <div class="form-group">
                <label for="name"> Jumlah </label>
                <input type="number" class="form-control" name="jumlah" id="jumlah">
            </div>
            <div class="form-group">
                <label for="name"> Tanggal Masuk </label>
                <input type="date" class="form-control" name="tanggal_masuk" id="tanggalMasuk">
            </div>
            <div class="form-group">
                <label for="name"> Harga Satuan</label>
                <input type="number" class="form-control" name="harga_satuan" id="hargaSatuan">
            </div>
            <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>


    @endsection

           
    @section('script')

    <script>

    $('.btnEdit').on('click',function(){
        var id = $(this).attr('data-id');
        $('#namaBarang').val($(this).attr('data-nama'));
        $('#jumlah').val($(this).attr('data-jumlah'));
        $('#tanggalMasuk').val($(this).attr('data-tanggal'));
        $('#hargaSatuan').val($(this).attr('data-harga'));
        $('#formEdit').prop('action','/toko/'+id);
    })

</script>
    @endsection