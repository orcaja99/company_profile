@extends('admin.dashboard')

@section('admin-content')
    <h1>Detail Data Jumlah pelanggan</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama</h5>
            <p class="card-text">{{ $jp->nama }}</p>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Gambar</h5>
            <img src="{{ asset('storage/'.$pegawai->gambar) }}" alt="{{ $pegawai->nama }}" width="300">
        </div>
    </div>

    <a href="{{ route('jpegawai.edit', $pegawai->id) }}" class="btn btn-primary mt-3">Edit</a>
    <form action="{{ route('jpegawai.destroy', $pegawai->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
    </form>
@endsection
