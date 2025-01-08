@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data Worker
                </div>
                <div class="card-body">
                    <form action="{{ url('penjoki/' . $penjoki->id, []) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="kode_penjoki">Kode Worker</label>
                            <input id="kode_penjoki" class="form-control" type="text" name="kode_penjoki"
                                value="{{ $penjoki->kode_penjoki ?? old('kode_penjoki') }}">
                            <span class="text-danger">{{ $errors->first('kode_penjoki') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nama_penjoki">Nama Worker</label>
                            <input id="nama_penjoki" class="form-control" type="text" name="nama_penjoki"
                                value="{{ $penjoki->nama_penjoki ?? old('nama_penjoki') }}">
                            <span class="text-danger">{{ $errors->first('nama_penjoki') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input id="no_hp" class="form-control" type="text" name="nomor_hp"
                                value="{{ $penjoki->nomor_hp ?? old('nomor_hp') }}">
                            <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
@endsection