@extends('../components/navbar_admin')
@section('content')
    <h1>Tambah User</h1>

    <form action="/admin/maskapai/store" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama_maskapai">Nama Maskapai</label>
        <input type="text" name="nama_maskapai" value="{{ old('nama_maskapai') }}" id="nama_maskapai"><br>
        <div class="">
            @error('nama_maskapai')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="logo_maskapai">Logo Maskapai</label>
        <input type="file" name="logo_maskapai" value="{{ old('logo_maskapai') }}" id="logo_maskapai"><br>
        <div class="">
            @error('logo_maskapai')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="kapasitas">kapasitas</label>
        <input type="number" name="kapasitas" id="kapasitas"><br>
        <div class="">
            @error('kapasitas')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>

@endsection
