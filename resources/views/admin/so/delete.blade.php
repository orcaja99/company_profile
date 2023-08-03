@extends('admin.dashboard')

@section('admin-content')
    <h1>Konfirmasi Penghapusan Struktur Organisasi</h1>

    <div class="alert alert-danger">
        <p>Anda akan menghapus stuktur organisasi ini:</p>
        <img src="{{ asset('storage/' . $so->gambar) }}" alt="Slider Foto" width="200">
        <p>ID: {{ $so->id }}</p>
    </div>

    <form action="{{ route('admin.so.destroy', $so->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus slider foto ini?')">Hapus</button>
        <a href="{{ route('admin.so.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
