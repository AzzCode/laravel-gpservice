<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pelanggan'] = Pelanggan::paginate(3);
        $data['judul'] = "Data pelanggan";
        return view('pelanggan_index', $data);
    }

    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['pelanggan'] = \App\Models\Pelanggan::where('nama_pelanggan', 'like', '%' . $cari . '%')->orwhere('alamat', 'like', '%' . $cari . '%')->paginate(5);
        $data['judul'] = 'Data-Data pelanggan';
        return view('pelanggan_index', $data);
    }

    public function registrasi()
    {
        $data['list_jk'] = ['Laki-Laki', 'Perempuan'];
        return view('registrasi_form', $data);
    }
    
  
    public function create()
    {
        $data['list_jk'] = ['Laki-Laki', 'Perempuan'];
        $data['list_st'] = ['Menikah', 'Belum Menikah', 'Duda', 'Janda'];
        return view('pelanggan_create', $data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'kode_pelanggan' => 'required|unique:pelanggans,kode_pelanggan',
            'nama_pelanggan' => 'required',
            'email' => 'required',
            'id_steam' => 'required',
        ]);

        $pelanggan = new \App\Models\Pelanggan();
        $pelanggan->kode_pelanggan = $request->kode_pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->email = $request->email;
        $pelanggan->id_steam = $request->id_steam;
        $pelanggan->save();
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
        $data['pelanggan'] = \App\Models\pelanggan::findOrFail($id);
        $data['list_jk'] = ['Laki-Laki', 'Perempuan'];
        $data['list_st'] = ['Menikah', 'Belum Menikah', 'Duda', 'Janda'];
        return view('pelanggan_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_pelanggan' => 'required|unique:pelanggans,kode_pelanggan,' . $id,
            'nama_pelanggan' => 'required',
            'email' => 'required',
            'id_steam' => 'required',
        ]);
        $pelanggan = \App\Models\Pelanggan::findOrFail($id);
        $pelanggan->kode_pelanggan = $request->kode_pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->email = $request-> email;
        $pelanggan->id_steam = $request-> id_steam;
        $pelanggan->save();

        return redirect('/pelanggan')->with('pesan', 'Data sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pelanggan = \App\Models\Pelanggan::findOrFail($id);
        $pelanggan->delete();
        return back()->with('pesan', 'Data Sudah Dihapus');
    }

    public function laporan()
    {
        $data['pelanggan'] = \App\Models\Pelanggan::all();
        $data['judul'] = 'Laporan Data pelanggan';
        return view('pelanggan_laporan', $data);
    }
}
