@extends('admin.dashboard')

@section('admin-content')
    <h1>Daftar Slider Foto</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.sliderfoto.create') }}" class="btn btn-primary mb-3">Tambah Slider Foto</a>

    @if ($sliderFoto->isEmpty())
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
                @foreach ($sliderFoto as $sliderFoto)
                    <tr>
                        <td>{{ $sliderFoto->id }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $sliderFoto->gambar) }}" alt="Slider Foto" width="100">
                        </td>
                        <td>
                            <a href="{{ route('admin.sliderfoto.edit', $sliderFoto->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.sliderfoto.destroy', $sliderFoto->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus slider foto ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
