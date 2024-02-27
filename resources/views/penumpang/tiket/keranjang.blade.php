@extends('components.navbar_penumpang')
@section('content')
    <h1>Halaman Keranjang</h1>
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
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        @foreach ($keranjang as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->rute->maskapai->nama_maskapai }}</td>
                <td>{{ $data->rute->maskapai->kapasitas }}</td>
                <td>{{ $data->rute->rute_asal }}</td>
                <td>{{ $data->rute->rute_tujuan }}</td>
                <td>{{ $data->waktu_berangkat }}</td>
                <td>{{ $data->waktu_tiba }}</td>
                <td>{{ $data->harga }}</td>
                <td>{{ $data->pivot->qty }}</td>
                <td>
                    <a href="/penumpang/keranjang/{{ $data->id }}/plus-keranjang">Tambah</a>
                    <a href="/penumpang/keranjang/{{ $data->id }}/min-keranjang">Kurang</a>
                    <a href="/penumpang/keranjang/{{ $data->id }}/hapus-keranjang" onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
                    <a href="#">Checkout</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
