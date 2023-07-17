<!-- resources/views/smt/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail SMT</h1>

    <p><strong>ID:</strong> {{ $smt->id }}</p>
    <p><strong>Judul:</strong> {{ $smt->judul }}</p>
    <p><strong>Sub Judul:</strong> {{ $smt->sub_judul }}</p>
    <p><strong>Keterangan:</strong> {{ $smt->keterangan }}</p>

    <a href="{{ route('smt.edit', $smt->id) }}" class="btn btn-success">Edit</a>
    <form action="{{ route('smt.destroy', $smt->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
    </form>
@endsection
