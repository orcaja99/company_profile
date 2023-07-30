@extends('admin.dashboard')

@section('admin-content')
    <h1>Daftar Sumber Air Baku</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('sab.create') }}" class="btn btn-primary mb-3">Tambah Tabel Klasifikasi Pelanggan</a>

    @if ($sab->isEmpty())
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
                @foreach ($sab as $sab)
                    <tr>
                        <td>{{ $sab->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $sab->gambar) }}" alt="sab" width="100">
                        </td>
                        <td>
                            <a href="{{ route('sab.edit', $sab->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('sab.destroy', $sab->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus sumber air baku ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
