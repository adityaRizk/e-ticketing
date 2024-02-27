@extends('components.navbar_petugas')
@section('content')
    <h1>Halaman Rute</h1>
    <a href="/petugas/rute/create">Tambah Rute</a>

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
                <td>{{ $data->maskapai->nama_maskapai ?? 'none' }}</td>
                <td>{{ $data->tanggal_pergi ?? 'none.' }}</td>
                <td>{{ $data->rute_asal ?? 'none.' }}</td>
                <td>{{ $data->rute_tujuan ?? 'none.' }}</td>
                <td>
                    <a href="/petugas/rute/{{ $data->id }}/edit">Edit</a>
                    <a href="/petugas/rute/{{ $data->id }}/delete" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
