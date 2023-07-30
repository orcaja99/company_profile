@extends('admin.dashboard')

@section('admin-content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Detail pengumumen</title>
    </head>
    <body>
        <h1>Detail pengumumen</h1>

        <p>ID: {{ $pengumumen->id }}</p>
        <p>Judul: {{ $pengumumen->judul }}</p>
        <p>Tanggal: {{ $pengumumen->tanggal }}</p>
        <p>Keterangan: {{ $pengumumen->keterangan }}</p>

        <a href="{{ route('pengumumen.index') }}">Kembali</a>
    </body>
    </html>
@endsection