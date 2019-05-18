@extends('layout')

@section('content')

<form action="/pasiens/{{ $pasien->id }}" method="post">
    @csrf
    @method('PATCH')
    <div class="form-row">
        <label for="nama">Nama Pasien</label>
        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Pasien" value="{{ $pasien->nama }}">
    </div>
    
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat rumah anda" value="{{ $pasien->alamat }}">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="telp">No. Telpon</label>
            <input type="text" required class="form-control" id="telp" name="telp" placeholder="Nomor Telepon" value="{{ $pasien->telp }}">
        </div>

        <div class="form-group col-md-3">
            <label for="rt">RT</label>
            <input type="number" required class="form-control" id="rt" name="rt" value="{{ $pasien->rt }}">
        </div>

        <div class="form-group col-md-3">
            <label for="rw">RW</label>
            <input type="number" required class="form-control" id="rw" name="rw" value="{{ $pasien->rw }}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" required class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}">
        </div>

        <div class="form-group col-md-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="0" {{ $pasien->jenis_kelamin == 0 ? 'selected' : '' }}>Perempuan</option>
                <option value="1" {{ $pasien->jenis_kelamin == 1 ? 'selected' : '' }}>Laki-Laki</option>
            </select>
        </div>
    </div>
    
   
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <form method="POST" action="/pasiens/{{$pasien->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection