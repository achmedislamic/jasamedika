@extends('layout')

@section('title', 'Data Kecamatan')

@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jadikan Admin?</th>
      </tr>
    </thead>
    <tbody>
            @php
            $i = 1
            @endphp
            @foreach ($users as $user)
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                <form action="/admin-users/{{ $user->id }}" method="post">
                    @csrf
                        @if ($user->is_admin)
                
                        @method('DELETE')
                    @endif
                    <input type="checkbox" class="form-control" name="is_admin" id="is_admin" onChange="this.form.submit()" {{ $user->is_admin ? "checked" : "" }}>
                    </form>
                </td>
                </tr>
            @endforeach
    </tbody>
  </table>


@endsection