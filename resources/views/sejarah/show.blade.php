<!-- resources/views/sejarah/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Sejarah</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $sejarah->id }}</td>
        </tr>
        <tr>
            <th>Judul</th>
            <td>{{ $sejarah->judul }}</td>
        </tr>
        <tr>
            <th>Sub Judul</th>
            <td>{{ $sejarah->sub_judul }}</td>
        </tr>
        <tr>
            <th>Judul Keterangan</th>
            <td>{{ $sejarah->judul_keterangan }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $sejarah->keterangan }}</td>
        </tr>
    </table>

    <a href="{{ route('sejarah.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
