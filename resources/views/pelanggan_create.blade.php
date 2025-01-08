@extends('layouts.sbadmin2')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah data Pelanggan
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pelanggan', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="kode_pelanggan">Kode Pelanggan</label>
                                <input id="kode_pelanggan" class="form-control" type="text" name="kode_pelanggan"
                                    value="{{ old('kode_pelanggan') }}">
                                <span class="text-danger">{{ $errors->first('kode_pelanggan') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input id="nama_pelanggan" class="form-control" type="text" name="nama_pelanggan"
                                    value="{{ old('nama_pelanggan') }}">
                                <span class="text-danger">{{ $errors->first('nama_pelanggan') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email"
                                    value="{{ old('email') }}">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="id_steam">ID Steam</label>
                                <input id="id_steam" class="form-control" type="text" name="id_steam"
                                    value="{{ old('id_steam') }}">
                                <span class="text-danger">{{ $errors->first('id_steam') }}</span>
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
