<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\harga;

class HargaController extends Controller
{
    public function index()
    {
        //
        $hargas = harga::all();
        return view('harga.index', ['hargas' => $hargas ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            
            'kode' => 'required',
            'nama_menu'=>'required',
            'harga'=>'required'
        ]);

        harga::create($request->all());
        return redirect('/harga')->with('success',  'Menu Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function show(harga $harga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hargas = harga::findorfail($id);
        return view('harga.edit', compact('hargas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\harga  $hargas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hargas = harga::findorfail($id);
        $hargas->update($request->all());
        return redirect('/harga')->with('toast_success',  'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hargas = harga::findorfail($id);
        $hargas->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    
    }
    
    public function dashboard(){
        return view ('harga.index');
    }
}
