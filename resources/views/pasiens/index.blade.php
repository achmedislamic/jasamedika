@extends('layout')

@section('title', 'Data Pasien')

@section('content')

<a href="/pasiens/create">Tambah</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID Pasien</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telp</th>
        <th scope="col">RT</th>
        <th scope="col">RW</th>
        <th scope="col">Kelurahan</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
            @php
            $i = 1
            @endphp
            @foreach ($pasiens as $pasien)
                <tr>
                <td>{{ $i++ }}</td>
                <td>@php
                    $year = strtok($pasien->tanggal_lahir, '-');
                    $smallYear = substr($year, -2);

                    $smallMonth = date("m",strtotime($pasien->tanggal_lahir));

                    echo $smallYear.$smallMonth.sprintf("%06d", $pasien->id);
                    @endphp
                </td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->telp }}</td>
                <td>{{ $pasien->rt }}</td>
                <td>{{ $pasien->rw }}</td>
                <td>{{ $pasien->kelurahan->nama }}</td>
                <td>{{ $pasien->tanggal_lahir }}</td>
                <td>{{ $pasien->jenis_kelamin == 1 ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td>
                <a href="/pasiens/{{ $pasien->id }}/edit">Ubah/Hapus</a>
                </td>
                </tr>
            @endforeach
    </tbody>
  </table>


@endsection