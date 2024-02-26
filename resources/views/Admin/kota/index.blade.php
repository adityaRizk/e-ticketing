@extends('components.navbar_admin')
@section('content')
    <h1>Halaman Kota</h1>
    <a href="/admin/kota/create">Tambah Kota</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama kota</th>
        </tr>
        @foreach ($kota as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_kota }}</td>
                <td>
                    <a href="/admin/kota/{{ $data->id }}/edit">Edit</a>
                    <a href="/admin/kota/{{ $data->id }}/delete" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
