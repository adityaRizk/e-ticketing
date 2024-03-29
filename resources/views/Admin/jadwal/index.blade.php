@extends('components.navbar_admin')
@section('content')
    <h1>Halaman Jadwal</h1>
    <a href="/admin/jadwal/create">Tambah Jadwal</a>

    <table>
        <tr>
            <th>No</th>
            <th>Maskapai</th>
            <th>Kapasitas</th>
            <th>Rute Asal</th>
            <th>Rute Tujuan</th>
            <th>Waktu Berangkat</th>
            <th>Waktu Tiba</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach ($jadwal as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->rute->maskapai->nama_maskapai }}</td>
                <td>{{ $data->rute->maskapai->kapasitas }}</td>
                <td>{{ $data->rute->rute_asal }}</td>
                <td>{{ $data->rute->rute_tujuan }}</td>
                <td>{{ $data->waktu_berangkat }}</td>
                <td>{{ $data->waktu_tiba }}</td>
                <td>{{ $data->harga }}</td>
                <td>
                    <a href="/admin/jadwal/{{ $data->id }}/edit">Edit</a>
                    <a href="/admin/jadwal/{{ $data->id }}/delete" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
