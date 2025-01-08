@extends('layouts.sbadmin2')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah data Worker
                    </div>
                    <div class="card-body">
                        <form action="{{ url('penjoki', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="kode_penjoki">Kode Worker</label>
                                <input id="kode_penjoki" class="form-control" type="text" name="kode_penjoki"
                                    value="{{ old('kode_penjoki') }}">
                                <span class="text-danger">{{ $errors->first('kode_penjoki') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="nama_penjoki">Nama Worker</label>
                                <input id="nama_penjoki" class="form-control" type="text" name="nama_penjoki"
                                    value="{{ old('nama_penjoki') }}">
                                <span class="text-danger">{{ $errors->first('nama_penjoki') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input id="no_hp" class="form-control" type="text" name="nomor_hp"
                                    value="{{ old('nomor_hp') }}">
                                <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
