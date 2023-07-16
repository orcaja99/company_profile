@extends('layouts.app')

@section('content')
    <h1>Data Standart Manajemen Mutu</h1>

    <a href="{{ route('standart_manajemen_mutu.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($standartManajemenMutus as $standartManajemenMutu)
                <tr>
                    <td>{{ $standartManajemenMutu->id }}</td>
                    <td>{{ $standartManajemenMutu->judul }}</td>
                    <td>{{ $standartManajemenMutu->keterangan }}</td>
                    <td>
                        <a href="{{ route('standart_manajemen_mutu.edit', $standartManajemenMutu->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('standart_manajemen_mutu.destroy', $standartManajemenMutu->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
