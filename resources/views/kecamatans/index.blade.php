@extends('layout')

@section('title', 'Data Kecamatan')

@section('content')

<a href="/kecamatans/create">Tambah</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kota</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
            @php
            $i = 1
            @endphp
            @foreach ($kecamatans as $kecamatan)
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $kecamatan->kota->nama }}</td>
                <td>{{ $kecamatan->nama }}</td>
                <td>
                <a href="/kecamatans/{{ $kecamatan->id }}/edit">Ubah/Hapus</a>
                </td>
                </tr>
            @endforeach
    </tbody>
  </table>


@endsection