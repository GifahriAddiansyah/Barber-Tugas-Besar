<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\harga;

class TransaksiController extends Controller
{
    public function index()
    {
        $harga=harga::all();
        $transaksi=Transaksi::where('status','0')->get();
        return view('transaksi.index',compact('transaksi','harga'));
    }
    public function view_transaksi()
    {
        $transaksi=Transaksi::where('status','0')->get();
        return view('transaksi.view-transaksi',compact('transaksi'));
    }
    public function store(Request $request)
    {
      
        $request->validate([
            'qty'=>'required'
        ]);
        
        Transaksi::create($request->all());
        return back();
        // $transaksi=Transaksi::where('status','0')->get();
        // return view('transaksi.index',compact('transaksi','harga'));
    }
    public function destroy($id)
    {
        $transaksi = Transaksi::findorfail($id);
        $transaksi ->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    
    }
}
