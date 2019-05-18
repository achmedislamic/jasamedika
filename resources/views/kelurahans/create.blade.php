@extends('layout')

@section('title', 'Input Data Kota')

@section('content')

<h1>Silahkan isi</h1>
<form action="/kelurahans" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Pilih Kota</label>
        <select name="kota_id" id="kota" class="form-control" required>
            <option value="">Pilih Kota</option>
            @foreach ($kotas as $kota)
                <option value="{{ $kota->id }}">{{ $kota->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
            <label for="nama">Pilih Kecamatan</label>
            <select name="kecamatan_id" id="kecamatan" class="form-control" required>
            </select>
        </div>
    <div class="form-group">
        <label for="nama">Nama Kelurahan</label>
        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Masukkan nama kelurahan">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection