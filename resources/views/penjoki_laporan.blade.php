<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Worker</title>

    <!-- Scripts-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <center>
                    <h2>{{ $judul }}</h2>
                </center>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Kode Worker</td>
                            <td>Nama Worker</td>
                            <td>Nomor Hp</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjoki as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->kode_penjoki }}</td>
                            <td>{{ $a->nama_penjoki }}</td>
                            <td>{{ $a->nomor_hp }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Mengetahui</h5>
                <br>
                <br>
                <br>
                <h5>Admin</h5>
            </div>
        </div>
    </div>
</body>

</html>