@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle mx-auto d-block" width="200">
<h3 class="text-center">{{ $name }}</h3>
<p class="text-center">{{ $email }}</p>
@endsection