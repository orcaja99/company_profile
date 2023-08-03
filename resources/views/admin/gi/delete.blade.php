@extends('admin.dashboard')

@section('admin-content')
    <h1>Konfirmasi Hapus Galeri IPA</h1>

    <div class="alert alert-danger">
        <p>Anda akan menghapus sumber air baku:</p>
        <img src="{{ asset('storage/' . $gi->gambar) }}" alt="gi" width="200">
        <p>ID: {{ $gi->id }}</p>
    </div>

    <form action="{{ route('admin.gi.destroy', $gi->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus galeri ipa ini?')">Hapus</button>
        <a href="{{ route('admin.gi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
