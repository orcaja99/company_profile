@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Sumber Air BAku</h1>
        <ul>
            @foreach($sab as $sab)
                <li>
                <img src="{{ asset('storage/images/' . $sab->gambar) }}" alt="Gambar Sumber Air Baku">
                </li>
            @endforeach
        </ul>
    </div>
@endsection
