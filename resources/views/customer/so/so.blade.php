@extends('layouts.app')

@section('content')
    @foreach ($so as $so)
        <tr>
            <img src="{{ asset('storage/' . $so->gambar) }}" alt="Gambar ipam" width="1000", height="1000">
        </tr>
    @endforeach
@endsection
