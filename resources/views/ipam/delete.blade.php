<!-- resources/views/ipam/delete.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Konfirmasi Hapus Instalasi Pengolahaan Air Minum</h1>

    <div class="alert alert-danger">
        <p>Anda akan menghapus sumber air baku:</p>
        <img src="{{ asset('storage/' . $ipam->gambar) }}" alt="ipam" width="200">
        <p>ID: {{ $ipam->id }}</p>
    </div>

    <form action="{{ route('ipam.destroy', $ipam->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Instalasi Pengolahaan Air Minum ini?')">Hapus</button>
        <a href="{{ route('ipam.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
