<!-- resources/views/ipam/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Instalasi Pengolahaan Air Minum</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('ipam.create') }}" class="btn btn-primary mb-3">Tambah Instalasi Pengolahaan Air Minum</a>

    @if ($ipam->isEmpty())
        <p>Tidak ada slider foto.</p>
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
                @foreach ($ipam as $ipam)
                    <tr>
                        <td>{{ $ipam->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $ipam->gambar) }}" alt="ipam" width="100">
                        </td>
                        <td>
                            <a href="{{ route('ipam.edit', $ipam->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('ipam.destroy', $ipam->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Instalasi Pengolahaan Air Minum ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
