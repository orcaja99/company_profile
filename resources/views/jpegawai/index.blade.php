<!-- rejpegawaiurces/views/jpegawai/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Jumlah Pelanggan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('jpegawai.create') }}" class="btn btn-primary mb-3">Tambah Jumlah Pegawai</a>

    @if ($jpegawai->isEmpty())
        <p>Tidak ada jumlah pegawai.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jpegawai as $jpegawai)
                    <tr>
                        <td>{{ $jpegawai->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $jpegawai->gambar) }}" alt="jpegawai " width="100">
                        </td>
                        <td>
                            <a href="{{ route('jpegawai.edit', $jpegawai->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('jpegawai.destroy', $jpegawai->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jumlah pelanggan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
