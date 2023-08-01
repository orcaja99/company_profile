@extends('layouts.app')

@section('content')
    @foreach ($gi as $gi)
        <tr>
            <img src="{{ asset('storage/' . $gi->gambar) }}" alt="Gambar ipam" width="1000", height="1000">
        </tr>
    @endforeach
@endsection
