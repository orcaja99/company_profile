@extends('layouts.app')

@section('content')
    <h1>Konfirmasi Penghapusan Data Standart Manajemen Mutu</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $standartManajemenMutu->id }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Judul: {{ $standartManajemenMutu->judul }}</h6>
            <p class="card-text">Keterangan: {{ $standartManajemenMutu->keterangan }}</p>
            <p class="card-text">Apakah Anda yakin ingin menghapus data ini?</p>
            <form action="{{ route('standart_manajemen_mutu.destroy', $standartManajemenMutu->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
            </form>
            <a href="{{ route('standart_manajemen_mutu.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </div>
@endsection
