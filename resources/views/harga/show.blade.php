@extends('layouts.app')
 
@section('content')
<div class="mt-3">
    <h3>Transaksi Penjualan</h3>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                 {{$error}}
                @endforeach
        </div>
    @else
            <p>Nama Pembeli : {{$nama}}</p>
            <p>Tanggal Transaksi : {{$tanggal}}</p>
            <p>Kode Barang : {{$kode}}</p>
            <p>Nama Barang : {{$namabarang}}</p>
            <p>Harga Barang : Rp.{{$harga}}</p>
            <p>Jumblah Beli : {{$jumlah}}</p>
            <p>Total Bayar : Rp.{{$total}}</p>
    @endif
@endsection