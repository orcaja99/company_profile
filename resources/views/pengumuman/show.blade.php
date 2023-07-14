@extends('layouts.app')

@section('content')
    <div>
        <h2>{{ $pengumuman->judul }}</h2>
        <p><strong>Tanggal:</strong> {{ $pengumuman->tanggal }}</p>
        <p><strong>Keterangan:</strong> {{ $pengumuman->keterangan }}</p>
        <a href="{{ route('pengumuman.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
