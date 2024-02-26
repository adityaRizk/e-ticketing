@extends('components.navbar_admin')
@section('content')
    <h1>Halaman Rute</h1>
    <a href="/admin/rute/create">Tambah Rute</a>

    <table>
        <tr>
            <th>No</th>
            <th>Maskapai</th>
            <th>Tanggal Pergi</th>
            <th>Rute Asal</th>
            <th>Rute Tujuan</th>
        </tr>

        @foreach ($rute as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->maskapai->nama_maskapai }}</td>
                <td>{{ $data->tanggal_pergi }}</td>
                <td>{{ $data->kota->nama_kota }}</td>
                <td>{{ $data->rute_asal }}</td>
                <td>
                    <a href="/admin/rute/{{ $data->id }}/edit">Edit</a>
                    <a href="/admin/rute/{{ $data->id }}/delete" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
