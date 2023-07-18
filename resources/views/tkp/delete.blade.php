<!-- resources/views/tkp/delete.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Konfirmasi Hapus Tabel klasifikasi pelanggan</h1>

    <div class="alert alert-danger">
        <p>Anda akan menghapus tabel klasifikasi pelanggan baru:</p>
        <img src="{{ asset('storage/' . $tkp->gambar) }}" alt="tkp" width="200">
        <p>ID: {{ $tkp->id }}</p>
    </div>

    <form action="{{ route('tkp.destroy', $tkp->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tabel klasifikasi pelanggan ini?')">Hapus</button>
        <a href="{{ route('tkp.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
