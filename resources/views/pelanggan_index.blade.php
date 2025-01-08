@extends('layouts.sbadmin2')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="col-md-4">
                        <form class="d-flex" role="search" method="get" action="{{ url('pelanggan/cari/data', []) }}">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                name="search">
                            &nbsp;
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kode pelanggan</th>
                                    <th>Nama pelanggan</th>
                                    <th>Email</th>
                                    <th>ID Steam</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pelanggan as $a)
                                    <tr>
                                        <td>{{ $a->id }}</td>
                                        <td>{{ $a->kode_pelanggan }}</td>
                                        <td>{{ $a->nama_pelanggan }}</td>
                                        <td>{{ $a->email }}</td>
                                        <td>{{ $a->id_steam }}</td>
                                        <td>

                                            <a href="{{ url('pelanggan/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('pelanggan/' . $a->id, []) }}" method="post"
                                                class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $pelanggan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
