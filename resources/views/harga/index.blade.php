@extends('admin.apps')
<?php $no = 1; ?>
@section('contents')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <h3>Data Stok</h3>
    <!-- <a href="/toko/create" class="btn btn-success"> Tambah Data</a> -->
    <a href='/barber' class='btn btn-primary ml-3' data-toggle="modal" data-target="#tambah"> Tambah Data</a>
    <div class="col-sm-12">
        @if (session()->get('success'))
            <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div>
        @endif
    </div>

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
      @foreach($hargas as $harga)
        <tr class="text-center">
        <td> {{ $no++ }}</td>
        <td> {{ $harga->kode }}</td>
        <td> {{ $harga->nama_menu }}</td>
        <td> {{ $harga->harga }}</td>
        
        <td>
            <a href="{{ url('edit',$harga->id) }}" data-toggle="modal" data-id="{{ $harga->id }}" data-kode="{{ $harga->kode }}" data-nama="{{ $harga->nama_menu }}" data-harga="{{ $harga->harga }}" data-target="#edit" class="btn btn-primary btnEdit text-light"> Edit</a>
              </td>
                <td>
                    <form action="#" method="post">
                      @csrf
                        @method('DELETE')
                        <a href="{{ url('delete',$harga->id) }}" data-id="{{ $harga->id }}"  data-target="#delete" class="btn btn-danger btnDelete text-light"> Delete</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

 @endsection