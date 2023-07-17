<!-- rejpurces/views/jp/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Jumlah Pelanggan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('jp.create') }}" class="btn btn-primary mb-3">Tambah Jumlah Pelanggan</a>

    @if ($jp->isEmpty())
        <p>Tidak ada jumlah pelanggan.</p>
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
                @foreach ($jp as $jp)
                    <tr>
                        <td>{{ $jp->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $jp->gambar) }}" alt="jp " width="100">
                        </td>
                        <td>
                            <a href="{{ route('jp.edit', $jp->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('jp.destroy', $jp->id) }}" method="POST" class="d-inline">
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
