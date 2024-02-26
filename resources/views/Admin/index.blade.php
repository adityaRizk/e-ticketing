@extends('../components/navbar_admin')
@section('content')
    <h1>Halaman Admin</h1>
    <p>Welcome {{ Auth::user()->username }}</p>
    {{-- <a href="logout" onclick="return confirm('Yakin Ingin Logout?')">Logout</a> --}}
    </body>
    </html>
@endsection
