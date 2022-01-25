<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            postion: relative:
            /* left: 3%; */
            border: 1px solid #543535;
        }
    </style>
    <title> Gifahri Barber Shop </title>
    </head>
    <body>
        <div class="form-group">
            <p align="center"><b>Stuk Pembelian </b> </p>
            <h2 align="center"><b>Barbershop Gifahri </b> </h2>
            <p align="center"> Jalan Juni Blok 13 No.6 Kode Pos 2001 Bandung </p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
            <th> No </th>
            <th> Nama Menu </th>
            <th> Jumlah </th>
            <th> Harga </th>
            <th> Total </th>
    </tr>
    <?php $total=0; ?>
    @foreach($transaksi as $item)
    @php $total=$total+($item->transaksi->harga*$item->qty) @endphp
    @endforeach
    @foreach ($transaksi as $item)
  
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->transaksi->nama_menu }}</td>
        <td>{{ $item->qty }}</td>
        <td>Rp.{{ $item->transaksi->harga }}</td>
        <td></td>
    </tr>
    @endforeach
    <tr>
        <td colspan="4">Total</td>
        <td>Rp.{{ $total }}</td>
    </tr>
    
    
        


    </table>
    </div>
    <tr>
        <!-- <td colspan="2">Total</td>
    Total = {{$total}}
    <tr> -->
    <h3> <center> Terima Kasih Atas Kunjungannya </center> </h3>
    </body>
    </html>