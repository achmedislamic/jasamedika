@extends('layout')

@section('content')

<form method="POST" action="/kecamatans/{{$kecamatan->id}}">
    @csrf
    @method('PATCH')
    <div class="form-group">
            <label for="nama">Pilih Kota</label>
            <select name="kota_id" id="kota" class="form-control" required>
                @foreach ($kotas as $kota)
                    <option {{ $kecamatan->kota_id == $kota->id ? "selected" : "" }} value="{{ $kota->id }}">{{ $kota->nama }}</option>
                @endforeach
            </select>
        </div>
    <div class="form-group">
        <label for="nama">Nama Kecamatan</label>
            <input type="text" required class="form-control" id="nama" name="nama" placeholder="Masukkan nama kecamatan" value="{{ $kecamatan->nama }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>    
<form method="POST" action="/kecamatans/{{$kecamatan->id}}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection