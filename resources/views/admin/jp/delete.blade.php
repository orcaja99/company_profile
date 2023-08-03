@extends('admin.dashboard')

@section('admin-content')
    <h1>Konfirmasi Hapusan Jumlah Pelanggan</h1>

    <div class="alert alert-danger">
        <p>Anda akan menghapus jumlah pelanggan ini:</p>
        <img src="{{ asset('storage/' . $jp->gambar) }}" alt="jp" width="200">
        <p>ID: {{ $jp->id }}</p>
    </div>

    <form action="{{ route('admin.jp.destroy', $jp->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jumlah pelanggan ini?')">Hapus</button>
        <a href="{{ route('admin.jp.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
