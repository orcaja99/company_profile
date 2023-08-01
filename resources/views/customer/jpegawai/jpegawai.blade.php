@extends('layouts.app')

@section('content')
    @foreach ($jpegawai as $jpegawai)
        <tr>
            <img src="{{ asset('storage/' . $jpegawai->gambar) }}" alt="Gambar jpegawai" width="1000", height="1000">
        </tr>
    @endforeach
@endsection
