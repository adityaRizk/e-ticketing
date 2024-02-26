@extends('components.navbar_admin')
@section('content')
    <h1>Halaman pengguna</h1>
    <a href="/admin/pengguna/create">Tambah pengguna</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        @foreach ($pengguna as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->nama_lengkap }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="/admin/pengguna/{{ $user->id }}/edit">Edit</a>
                    <a href="/admin/pengguna/{{ $user->id }}/delete" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
