<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['administrasi'] = \App\Models\Administrasi::paginate(100);
        $data['judul'] = 'Data-Data Administrasi';
        return view('administrasi_index', $data);
    }

    /**
     * Show the form for ggcreating a new resource.
     */
    public function create()
    {
        $data['list_pelanggan'] = \App\Models\Pelanggan::selectRaw("id, concat(kode_pelanggan,'-', nama_pelanggan) as
        tampil")->pluck('tampil', 'id');
        $data['list_penjoki'] = \App\Models\Penjoki::selectRaw("id, concat(kode_penjoki,'-',nama_penjoki) as
        tampil")->pluck('tampil', 'id');
        $data['nama_jasa'] = [];
        return view('administrasi_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'pelanggan_id' => 'required',
            'penjoki_id' => 'required',
            'nama_jasa' => 'required',
            'biaya' => 'required'
        ]);
        $administrasi = new \App\Models\Administrasi();
        $administrasi->tanggal = $request->tanggal;
        $administrasi->pelanggan_id = $request->pelanggan_id;
        $administrasi->penjoki_id = $request->penjoki_id;
        $administrasi->nama_jasa = $request->nama_jasa;
        $administrasi->biaya = $request->biaya;
        $administrasi->save();
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
        $data['administrasi'] = \App\Models\Administrasi::findOrFail($id);
        $data['list_pelanggan'] = \App\Models\Pelanggan::selectRaw("id,concat(kode_pelanggan,'-',nama_pelanggan) as tampil")->pluck('tampil', 'id');
        $data['list_penjoki'] = \App\Models\Penjoki::selectRaw("id,concat(kode_penjoki,'-',nama_penjoki) as tampil")->pluck('tampil', 'id');
        return view('administrasi_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'pelanggan_id' => 'required',
            'penjoki_id' => 'required',
            'nama_jasa' => 'required',
            'biaya' => 'required'
        ]);

        $administrasi = \App\Models\Administrasi::findOrFail($id);
        $administrasi->tanggal = $request->tanggal;
        $administrasi->pelanggan_id = $request->pelanggan_id;
        $administrasi->penjoki_id = $request->penjoki_id;
        $administrasi->nama_jasa = $request->nama_jasa;
        $administrasi->biaya = $request->biaya;
        $administrasi->save();

        return redirect('/administrasi')->with('pesan', 'Data Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $administrasi = \App\Models\Administrasi::findOrFail($id);
        $administrasi->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }
}
