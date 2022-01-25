@extends('admin.apps')
 
@section('contents')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
        <div class="card-header">TRANSAKSI</div>
                    <div class="card-body">
                    <h3>Form Transaksi</h3>
                    <table class="table table-bordered">
                          <tr><td>
                                <div class="col-md-12">
                                    <form action="{{ route('simpan-transaksi') }}" method="post">
                                    {{ csrf_field() }}
                                    <select  class="form-control" placeholder="input menu" name="id_harga">
                                        <option value="">Pilih Menu</option>
                                        @foreach($harga as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_menu }}</option>
                                        @endforeach
                                </div>
                           </td></tr>
                        <tr><td>
                                <div class="col-md-12">
                                <input  class="form-control" type="number" name="qty" value="{{ $item->qty }}">
                                <!-- <input type="text" name="qty" placeholder="QTY" class="form-control"> -->
                                </div>
                         </td></tr>
                        <tr><td>
                                <button type="submit"  class="btn btn-primary">Simpan</button>

                            </td></tr>
                    </table>
                    </form>
                    <table class="table table-bordered">
                        <tr class="success"><th colspan="6">Detail Transaksi</th></tr>
                        <tr>
                            <th>No</th>
                            <th>Nama Menu</th>
                            <th>Qty</th>
                            <th>Harga</th> 
                            <th>Subtotal</th>
                            <th>Cancel</th></tr>
                              <?php $no=1; $total=0; ?>
                              @foreach ($transaksi as $item)
                              <tr>
                                <td> {{ $no++ }}</td>
                                <td> {{ $item->transaksi->nama_menu }}</td>
                                <td> {{ $item->qty }} </td>
                                <td> {{ $item->transaksi->harga }}</td>
                                <td> {{ $item->transaksi->harga*$item->qty }} </td>
                                <td><a href="{{ url('delete-transaksi',$item->id) }}" data-id="{{ $item->id }}"  data-target="#delete" class="btn btn-danger">Cancel</a>
                                </td>
                            </tr>
                               <?php $no++ ?>
                               <?php $total=$total+($item->transaksi->harga*$item->qty)?>
                       @endforeach
                                <tr><td colspan="5"><p align="right">Total</p></td><td>{{$total}}</td></tr>
                    </table>
                    <a href="{{route('view-transaksi')}}"  class="btn btn-danger" class="right">Selesai</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection