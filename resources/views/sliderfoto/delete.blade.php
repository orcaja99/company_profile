@extends('admin.dashboard')

@section('admin-content')
    <h1>Konfirmasi Penghapusan Slider Foto</h1>

    <div class="alert alert-danger">
        <p>Anda akan menghapus slider foto ini:</p>
        <img src="{{ asset('storage/' . $sliderFoto->gambar) }}" alt="Slider Foto" width="200">
        <p>ID: {{ $sliderFoto->id }}</p>
    </div>

    <form action="{{ route('sliderfoto.destroy', $sliderFoto->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus slider foto ini?')">Hapus</button>
        <a href="{{ route('sliderfoto.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
