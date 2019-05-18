@extends('layout')

@section('content')
<form method="POST" action="/kotas/{{$kota->id}}">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="nama">Nama Kota</label>
            <input type="text" required class="form-control" id="nama" name="nama" placeholder="Masukkan nama kota" value="{{ $kota->nama }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>    
<form method="POST" action="/kotas/{{$kota->id}}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection