@extends('layouts.sbadmin2')
@section('isinya')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kode Worker</th>
                                    <th>Nama Worker</th>
                                    <th>Nomor Hp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penjoki as $a)
                                    <tr>
                                        <td>{{ $a->id }}</td>
                                        <td>{{ $a->kode_penjoki }}</td>
                                        <td>{{ $a->nama_penjoki }}</td>
                                        <td>{{ $a->nomor_hp }}</td>
                                        <td>

                                            <a href="{{ url('penjoki/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('penjoki/' . $a->id, []) }}" method="post" class="d-inline"
                                                onsubmit="return confirm('Apakah Dihapus?')">
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
                        {{ $penjoki->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
