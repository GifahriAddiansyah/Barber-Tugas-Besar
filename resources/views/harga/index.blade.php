@extends('layouts.app2')
 
@section('content')

<a class="btn btn-outline-secondary mt-3 btn-lg" href="/harga/add">Tambah Transaksi</a>
<table id="table" class="table mt-3">
  <thead class="table-brown">
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Kode </th>
      <th scope="col">List Menu </th>
      <th scope="col">Harga</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  @php
    $i=1;
      @endphp
      @foreach($data as $datas)
        <tr class="text-center">
            <th>{{$i}}</th>
            <td>{{$datas['code']}}</td>
            <td>{{$datas['name']}}</td>
            <td>Rp.{{$datas['price']}}</td>
            <td>Rp.{{$datas['price']}}</td>
            <td>Rp.{{$datas['price']}}</td>
        </tr>
       @php $i++; @endphp
    @endforeach
   
  </tbody>
</table>
@endsection
