@extends('layouts.app')
 
@section('content')
<a class="btn btn-success mt-3" href="/harga/add">Tambah Transaksi</a>
<table class="table mt-3">
  <thead class="bg-dark text-light">
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Kode </th>
      <th scope="col">List </th>
      <th scope="col">Harga</th>
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
        </tr>
       @php $i++; @endphp
    @endforeach
   
  </tbody>
</table>
@endsection
