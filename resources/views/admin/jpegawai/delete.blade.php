@extends('admin.dashboard')

@section('admin-content')
    <h1>Konfirmasi Hapusan Jumlah Pegawai</h1>

    <div class="alert alert-danger">
        <p>Anda akan menghapus jumlah pegawai ini:</p>
        <img src="{{ asset('storage/' . $jpegawai->gambar) }}" alt="jpegawai" width="200">
        <p>ID: {{ $jpegawai->id }}</p>
    </div>

    <form action="{{ route('admin.jpegawai.destroy', $jpegawai->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jumlah pegawai ini?')">Hapus</button>
        <a href="{{ route('admin.jpegawai.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
