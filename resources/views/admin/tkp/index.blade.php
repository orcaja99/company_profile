@extends('admin.dashboard')

@section('admin-content')
    <h1>Daftar Tabel klasifikasi Pelanggan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.tkp.create') }}" class="btn btn-primary mb-3">Tambah Tabel Klasifikasi Pelanggan</a>

    @if ($tkp->isEmpty())
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
                @foreach ($tkp as $tkp)
                    <tr>
                        <td>{{ $tkp->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $tkp->gambar) }}" alt="tkp" width="100">
                        </td>
                        <td>
                            <a href="{{ route('admin.tkp.edit', $tkp->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.tkp.destroy', $tkp->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tabel klasifikasi pelanggan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
