@extends('layouts.gpservis')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Registrasi Data pelanggan</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('pelanggan', []) }}" method="POST">

                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="my-input">Nama pelanggan</label>
                                <input id="my-input" class="form-control" type="text" name="nama_pelanggan"
                                    value="{{ old('nama_pelanggan') }}">
                                <span class="text-danger">{{ $errors->first('nama_pelanggan') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Email</label>
                                <textarea name="email" id="" cols="30" rows="3" class="form-control">
                                    {{ old('email') }}
                                </textarea>
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            
                            <div class="form-group">
                                <label for="my-input">ID Steam</label>
                                <textarea name="id_steam" id="" cols="30" rows="3" class="form-control">
                                    {{ old('id_steam') }}
                                </textarea>
                                <span class="text-danger">{{ $errors->first('id_steam') }}</span>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
