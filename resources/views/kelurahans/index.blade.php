@extends('layout')

@section('title', 'Data Kelurahan')

@section('content')

<a href="/kelurahans/create">Tambah</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kota</th>
        <th scope="col">Kecamatan</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
            @php
            $i = 1
            @endphp
            @foreach ($kelurahans as $kelurahan)
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $kelurahan->kecamatan->kota->nama }}</td>
                <td>{{ $kelurahan->kecamatan->nama }}</td>
                <td>{{ $kelurahan->nama }}</td>
                <td>
                <a href="/kelurahans/{{ $kelurahan->id }}/edit">Ubah/Hapus</a>
                </td>
                </tr>
            @endforeach
    </tbody>
  </table>


@endsection