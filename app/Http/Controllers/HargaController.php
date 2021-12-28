<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaController extends Controller
{
    private $items = [
        [
            'code'=>'B001',
            'name'=>'Dewasa',
            'price'=>25000,
        ],
        [
            'code'=>'B002',
            'name'=>'Pulpen',
            'price'=>1500,
        ],
        [
            'code'=>'B003',
            'name'=>'Pencil',
            'price'=>1000,
        ],
        [
            'code'=>'B004',
            'name'=>'Penghapus',
            'price'=>500,
        ],
        [
            'code'=>'B005',
            'name'=>'Penggaris',
            'price'=>1300,
        ],
    ];

    public function index(){
        return view('harga.index',['data'=>$this->items]);
    }

    public function add(){
        return view('harga.add');
    }

    public function addProcess(Request $request){
        $nama = $request->namapembeli;
        $kode = $request->kodeBarang;
        $tanggal = date("d F Y");
        $check = false;
        
        foreach($this->items as $item){ 
            if($kode == $item['code']){
                $harga = $item['price'];
                $namabarang = $item['name'];
                $check = true;
            }
        }

    //     if($check == false){
    //         return view('harga.show')->withErrors("Kode Harga $kode Tidak Terdaftar");
    //     }else{
    //         $total = (int)$jumlah * (int)$harga;
    //         return view('barang.show',['nama'=>$nama,'kode'=>$kode,'jumlah'=>$jumlah,'tanggal'=>$tanggal,
    //         'harga'=>$harga,'namabarang'=>$namabarang,'total'=>$total]);
    //     }
    }
}
