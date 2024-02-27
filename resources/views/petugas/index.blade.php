@extends('../components/navbar_petugas')
@section('content')
    <h1>Halaman Petugas</h1>
    <p>Welcome {{ Auth::user()->username }}</p>
    {{-- <a href="logout" onclick="return confirm('Yakin Ingin Logout?')">Logout</a> --}}
@endsection
