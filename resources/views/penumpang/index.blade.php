@extends('components/navbar_penumpang')
@section('content')
<h1>Halaman Penumoang</h1>
<p>Welcome {{ Auth::user()->username }}</p>
@endsection
