@extends('../components/navbar_petugas')
@section('content')
    <h1>Tambah Kota</h1>

    <form action="/petugas/jadwal/store" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="rute_id">Rute</label>
        <select name="rute_id" id="">
            @foreach ($rute as $item)
                <option value="{{ $item->id }}">Rute Asal: {{ $item->rute_asal }} - Rute Tujuan: {{ $item->rute_tujuan }}</option>
            @endforeach
        </select>
        <div class="">
            @error('rute_id')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="waktu_berangkat">Waktu Berangkat</label>
        <input type="time" name="waktu_berangkat" value="{{ old('waktu_berangkat') }}" id="waktu_berangkat"><br>
        <div class="">
            @error('waktu_berangkat')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="waktu_tiba">Waktu Tiba</label>
        <input type="time" name="waktu_tiba" value="{{ old('waktu_tiba') }}" id="waktu_tiba"><br>
        <div class="">
            @error('waktu_tiba')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="harga">Harga</label>
        <input type="number" name="harga" value="{{ old('harga') }}" id="harga"><br>
        <div class="">
            @error('harga')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>

@endsection
