@extends('../components/navbar_admin')
@section('content')
    <h1>Tambah User</h1>

    <form action="/admin/pengguna/{{ $pengguna->id }}/update" method="POST">
        @csrf

        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="{{ $pengguna->nama_lengkap }}" id="nama_lengkap"><br>

        <label for="username">Username</label>
        <input type="text" name="username" value="{{ $pengguna->username }}" id="username"><br>

        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="penumpang">Penumpang</option>
            <option value="petugas">Petugas</option>
        </select>
        <div class="">
            @error('role')
                <p class=" text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>

        <button type="submit">Simpan</button>
    </form>

@endsection
