@extends('admin.apps')
 
@section('contents')
<div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
              <h1 class="text-2xl font-semibold">Jenis Langganan</h1>
            </div>
<a class="btn btn-outline-secondary mt-3 btn-lg" href="/harga/add">Tambah Transaksi</a>
<table id="table" class="card-body">
  <thead class="table table-bordered">
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
