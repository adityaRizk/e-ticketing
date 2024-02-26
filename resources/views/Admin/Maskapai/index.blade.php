@extends('components.navbar_admin')
@section('content')
    <h1>Halaman Maskapai</h1>
    <a href="/admin/maskapai/create">Tambah Maskapai</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Maskapai</th>
            <th>Logo Maskapai</th>
            <th>Kapasitas</th>
        </tr>
        @foreach ($maskapai as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->nama_maskapai }}</td>
                <td><img src="/images/{{ $user->logo_maskapai }}" alt="" width="100"></td>
                <td>{{ $user->kapasitas }}</td>
                <td>
                    <a href="/admin/maskapai/{{ $user->id }}/edit">Edit</a>
                    <a href="/admin/maskapai/{{ $user->id }}/delete" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
