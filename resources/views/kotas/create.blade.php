@extends('layout')

@section('title', 'Input Data Kota')

@section('content')
<h1>Silahkan isi</h1>
<form action="/kotas" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Kota</label>
        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Masukkan nama kota">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection