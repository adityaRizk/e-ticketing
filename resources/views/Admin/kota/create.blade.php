@extends('../components/navbar_admin')
@section('content')
    <h1>Tambah Kota</h1>

    <form action="/admin/kota/store" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama_kota">Nama kota</label>
        <input type="text" name="nama_kota" value="{{ old('nama_kota') }}" id="nama_kota"><br>
        <div class="">
            @error('nama_kota')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>

@endsection
