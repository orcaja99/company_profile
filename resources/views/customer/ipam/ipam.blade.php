@extends('layouts.app')

@section('content')
    @foreach ($ipam as $ipam)
        <tr>
            <img src="{{ asset('storage/' . $ipam->gambar) }}" alt="Gambar ipam" width="1000", height="1000">
        </tr>
    @endforeach
@endsection
