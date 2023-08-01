@extends('layouts.app')

@section('content')
    @foreach ($tkp as $tkp)
        <tr>
            <img src="{{ asset('storage/' . $tkp->gambar) }}" alt="Gambar ipam" width="1000", height="1000">
        </tr>
    @endforeach
@endsection
