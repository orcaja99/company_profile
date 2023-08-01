@extends('layouts.app')

@section('content')
    @foreach ($jp as $jp)
        <tr>
            <img src="{{ asset('storage/' . $jp->gambar) }}" alt="Gambar jp" width="1000", height="1000">
        </tr>
    @endforeach
@endsection
