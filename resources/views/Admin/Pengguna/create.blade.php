@extends('../components/navbar_admin')
@section('content')
    <h1>Tambah User</h1>

    <form action="/admin/pengguna/store" method="POST">
        @csrf

        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" id="nama_lengkap"><br>
        <div class="">
            @error('nama_lengkap')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="username">Username</label>
        <input type="text" name="username" value="{{ old('username') }}" id="username"><br>
        <div class="">
            @error('username')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="penumpang">Penumpang</option>
            <option value="petugas">petugas</option>
        </select>
        <div class="">
            @error('role')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <div class="">
            @error('password')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>

@endsection
