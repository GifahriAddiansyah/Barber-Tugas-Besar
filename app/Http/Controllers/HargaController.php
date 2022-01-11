<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaController extends Controller
{
    private $items = [
        [
            'code'=>'H111',
            'name'=>'Dewasa',
            'price'=>25000,
        ],
        [
            'code'=>'H112',
            'name'=>'Remaja',
            'price'=>20000,
        ],
        [
            'code'=>'H113',
            'name'=>'Anak-anak',
            'price'=>15000,
        ],
        [
            'code'=>'H114',
            'name'=>'Botak Mengkilat',
            'price'=>27000,
        ],
        [
            'code'=>'H115',
            'name'=>'Kumis',
            'price'=>10000,
        ],
        [
            'code'=>'H116',
            'name'=>'Keramas',
            'price'=>5000,
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
