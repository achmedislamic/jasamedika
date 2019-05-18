@extends('layout')

@section('title', 'Input Data Kota')

@section('content')
<h1>Silahkan isi</h1>

<form action="/pasiens" method="post">
    @csrf
    <div class="form-row">
        <label for="nama">Nama Pasien</label>
        <input type="text" required class="form-control" id="nama" name="nama" placeholder="Nama Pasien">
    </div>
    
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat rumah anda">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="telp">No. Telpon</label>
            <input type="text" required class="form-control" id="telp" name="telp" placeholder="Nomor Telepon">
        </div>

        <div class="form-group col-md-3">
            <label for="rt">RT</label>
            <input type="number" required class="form-control" id="rt" name="rt">
        </div>

        <div class="form-group col-md-3">
            <label for="rw">RW</label>
            <input type="number" required class="form-control" id="rw" name="rw">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="kota">Kota</label>
            <select id="kota" class="form-control">
                <option value="">Pilih Kota</option>
                @foreach ($kotas as $kota)
                    <option value="{{ $kota->id }}">{{ $kota->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="kecamatan">Kecamatan</label>
            <select id="kecamatan" class="form-control">
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="kelurahan">Kelurahan</label>
            <select name="kelurahan_id" id="kelurahan" class="form-control" required>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" required class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>

        <div class="form-group col-md-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option value="0">Perempuan</option>
                <option value="1">Laki-Laki</option>
            </select>
        </div>
    </div>
    
   
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection