<!-- resources/views/so/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Struktur Organisasi</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('so.create') }}" class="btn btn-primary mb-3">Tambah Stuktur Organisasi</a>

    @if ($so->isEmpty())
        <p>Tidak ada struktur organisasi.</p>
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
                @foreach ($so as $so)
                    <tr>
                        <td>{{ $so->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $so->gambar) }}" alt="SO " width="100">
                        </td>
                        <td>
                            <a href="{{ route('so.edit', $so->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('so.destroy', $so->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus struktur organisasi ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
