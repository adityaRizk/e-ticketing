@extends('components/navbar_penumpang')
@section('content')
<h1>Halaman Jadwal</h1>
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
                <a href="/penumpang/keranjang/{{ $data->id }}/tambah-keranjang">Keranjang</a>
                <a href="/penumpang/tiket/{{ $data->id }}/keranjang">Pesan</a>
            </td>
        </tr>
    @endforeach

</table>
@endsection
