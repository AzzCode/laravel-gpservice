<?php

namespace App\Http\Controllers;

use App\Models\Penjoki;
use Illuminate\Http\Request;

class PenjokiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['penjoki']= Penjoki::paginate(3);
        $data['judul']="Data Worker";
        return view('penjoki_index', $data);

    }

    public function create()
    {
        $data['penjoki']=[];
        return view('penjoki_create', $data);
    }


    public function store(Request $request)
    {
        $request->validate([
        'kode_penjoki' => 'required|unique:penjokis,kode_penjoki',
        'nama_penjoki' => 'required',
        'nomor_hp' => 'required'
        ]);

        $penjoki = new \App\Models\penjoki();
        $penjoki->kode_penjoki = $request->kode_penjoki;
        $penjoki->nama_penjoki = $request->nama_penjoki;
        $penjoki->nomor_hp = $request->nomor_hp;
        $penjoki->save();
        return back()->with('pesan', 'Data sudah Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $data['penjoki'] = \App\Models\Penjoki::findOrFail($id);
         $data['list_sp']=['Umum', 'Kandungan','Anak','Tht'];
         return view('penjoki_edit', $data);
    }
        

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'kode_penjoki' => 'required|unique:penjokis,kode_penjoki,' . $id,
        'nama_penjoki' => 'required',
        'spesialis' => 'required',
        'nomor_hp' => 'required'
        ]);
        $penjoki = \App\Models\Penjoki::findOrFail($id);
        $penjoki->kode_penjoki = $request->kode_penjoki;
        $penjoki->nama_penjoki = $request->nama_penjoki;
        $penjoki->nomor_hp = $request->nomor_hp;
        $penjoki->save();

        return redirect('/penjoki')->with('pesan', 'Data sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjoki = \App\Models\Penjoki::findOrFail($id);
        $penjoki->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }

    public function laporan()
    {
    $data['penjoki'] = \App\Models\Penjoki::all();
    $data['judul'] = 'Laporan Data penjoki';
    return view('penjoki_laporan', $data);
    }
}