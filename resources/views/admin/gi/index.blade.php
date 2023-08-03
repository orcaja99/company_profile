@extends('admin.dashboard')

@section('admin-content')
    <h1>Daftar Galeri IPA</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.gi.create') }}" class="btn btn-primary mb-3">Tambah Galeri IPA</a>

    @if ($gi->isEmpty())
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
                @foreach ($gi as $gi)
                    <tr>
                        <td>{{ $gi->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $gi->gambar) }}" alt="gi" width="100">
                        </td>
                        <td>
                            <a href="{{ route('admin.gi.edit', $gi->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.gi.destroy', $gi->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus galeri ipa ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
