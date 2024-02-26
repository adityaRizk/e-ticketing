@extends('../components/navbar_admin')
@section('content')
    <h1>Tambah User</h1>

    <form action="/admin/maskapai/{{ $maskapai->id }}/update" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama_maskapai">Nama Maskapai</label>
        <input type="text" name="nama_maskapai" value="{{ $maskapai->nama_maskapai }}" id="nama_maskapai"><br>
        <div class="">
            @error('nama_maskapai')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="logo_maskapai">Logo Maskapai</label>
        <input type="file" name="logo_maskapai" value="{{ $maskapai->logo_maskapai }}" id="logo_maskapai"><br>
        <img src="/images/{{ $maskapai->logo_maskapai }}" alt="" width="100">
        <div class="">
            @error('logo_maskapai')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="kapasitas">kapasitas</label>
        <input type="number" name="kapasitas" value="{{ $maskapai->kapasitas }}" id="kapasitas"><br>
        <div class="">
            @error('kapasitas')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>

@endsection
