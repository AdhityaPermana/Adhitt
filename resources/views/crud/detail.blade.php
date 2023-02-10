@extends('template')

@section('content')
    <h1>Detail Siswa</h1>
        <a href="/crud" class="btn btn-primary btn-sm mb-2">Kembali</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <td>{{$siswa->nama}}</td>
                    </tr>
                    <tr>
                        <th>Nim</th>
                        <td>{{$siswa->nim}}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>
                            @if ($siswa->jeniskelamin == 'L')
                                {{'Laki-Laki'}}
                            @elseif($siswa->jeniskelamin == 'P')
                                {{'Perempuan'}}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{$siswa->alamat}}</td>
                    </tr>
                </table>
            </div>
        </div>
@endsection