@extends('layouts.sbadmin2')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Edit Data Administrasi
                    </div>

                    <div class="card-body">
                        <form action="{{ url('administrasi/' . $administrasi->id, []) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="my-input">Tanggal</label>
                                <input id="tgl" class="form-control" type="date" name="tanggal"
                                    value="{{ date('d M Y', strtotime($administrasi->tanggal)) ?? old('tanggal') }}">
                                <script>
                                    document.getElementById("tgl").valueAsDate = new Date();
                                </script>
                                <span class="text-danger">{{ $errors->first('tanggal') }}
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="my-select">Pelanggan</label>
                                <select id="my-select" class="form-control" name="pelanggan_id">
                                    <option value="">Pilih Pelanggan</option>
                                    @foreach ($list_pelanggan as $id => $a)
                                        <option value="{{ $id }}" @selected($id == $administrasi->pelanggan_id)>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('pelanggan_id') }}
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="my-select">Worker</label>
                                <select id="my-select" class="form-control" name="penjoki_id">
                                    <option value="">Pilih Worker</option>
                                    @foreach ($list_penjoki as $id => $a)
                                        <option value="{{ $id }}" @selected($id == $administrasi->penjoki_id)>
                                            {{ $a }}
                                        </option>
                                    @endforeach

                                </select>
                                <span class="text-danger">{{ $errors->first('penjoki_id') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Permintaan</label>
                                <input id="my-input" class="form-control" type="text" name="nama_jasa"
                                    value="{{ old('nama_jasa') }}">
                                <span class="text-danger">{{ $errors->first('nama_jasa') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Biaya</label>
                                <input id="my-input" class="form-control" type="number" name="biaya"
                                    value="{{ $administrasi->biaya ?? old('biaya') }}">
                                <span class="text-danger">{{ $errors->first('biaya') }}</span>
                            </div>

                    </div>
                    <div class="card-footer">
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
