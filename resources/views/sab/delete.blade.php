<!-- resources/views/sab/delete.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Konfirmasi Hapus Sumber Air Baku</h1>

    <div class="alert alert-danger">
        <p>Anda akan menghapus sumber air baku:</p>
        <img src="{{ asset('storage/' . $sab->gambar) }}" alt="sab" width="200">
        <p>ID: {{ $sab->id }}</p>
    </div>

    <form action="{{ route('sab.destroy', $sab->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus sumber air baku ini?')">Hapus</button>
        <a href="{{ route('sab.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
