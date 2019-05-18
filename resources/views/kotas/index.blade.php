@extends('layout')

@section('title', 'Data Kota')

@section('content')

<a href="/kotas/create">Tambah</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
            @php
            $i = 1
            @endphp
            @foreach ($kotas as $kota)
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $kota->nama }}</td>
                <td>
                <a href="/kotas/{{ $kota->id }}/edit">Ubah/Hapus</a>
                </td>
                </tr>
            @endforeach
    </tbody>
  </table>


@endsection