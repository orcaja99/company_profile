@extends('layouts.app')

@section('content')
    @foreach ($sab as $sab)
        <tr>
            <img src="{{ asset('storage/' . $sab->gambar) }}" alt="Gambar sab" width="1000", height="1000">
        </tr>
    @endforeach
@endsection
