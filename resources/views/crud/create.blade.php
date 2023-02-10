@extends('template')

@section('content')
    <h1>Tambah Data</h1>
    <a href="/crud" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <form action="/crud" method="post">
        @csrf
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label for="">Nim</label>
                    <input type="text" class="form-control" name="nim">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="">Jenis Kelamin</label>
            <select name="jeniskelamin" id="" class="form-control">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control" cols="30" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
@endsection