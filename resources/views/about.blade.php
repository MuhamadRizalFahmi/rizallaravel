

@extends('layout.main')

@section('container')
    <h1>Halaman About</h1>
    <h3> {{ $nama }}</h3>
    <h3> {{ $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200px" class="img-thumbnail rounded-circle">
@endsection