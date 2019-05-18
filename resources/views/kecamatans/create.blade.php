@extends('layout')

@section('title', 'Input Data Kota')

@section('content')
<h1>Silahkan isi</h1>
<form action="/kecamatans" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Pilih Kota</label>
        <select name="kota_id" id="kota" class="form-control" required>
            @foreach ($kotas as $kota)
                <option value="{{ $kota->id }}">{{ $kota->nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nama">Nama Kecamatan</label>
        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Masukkan nama kecamatan">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection