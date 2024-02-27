@extends('../components/navbar_petugas')
@section('content')
    <h1>Edit Rute</h1>

    <form action="/petugas/rute/{{ $rute->id }}/update" method="POST">
        @csrf

        <label for="maskapai_id">Maskapai</label>
        <select name="maskapai_id" id="maskapai_id">
            @foreach ($maskapai as $m)
                <option value="{{ $m->id }}">{{ $m->nama_maskapai }}</option>
            @endforeach
        </select>
        <div class="">
            @error('maskapai_id')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="tanggal_pergi">Tanggal pergi</label>
        <input type="date" name="tanggal_pergi" value="{{ old('tanggal_pergi') }}" id="tanggal_pergi"><br>
        <div class="">
            @error('tanggal_pergi')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="rute_asal">Rute Awal</label>
        <select name="rute_asal" id="rute_asal">
            @foreach ($kota as $k)
                <option value="{{ $k->nama_kota }}">{{ $k->nama_kota }}</option>
            @endforeach
        </select>
        <div class="">
            @error('rute_asal')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="rute_tujuan">Rute Tujuan</label>
        <select name="rute_tujuan" id="rute_tujuan">
            @foreach ($kota as $k)
                <option value="{{ $k->nama_kota }}">{{ $k->nama_kota }}</option>
            @endforeach
        </select>
        <div class="">
            @error('rute_tujuan')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>

@endsection
