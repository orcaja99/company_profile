@extends('admin.dashboard')

@section('admin-content')
    <h1>Edit Data Sejarah</h1>

    <form action="{{ route('admin.sejarah.update', $sejarah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $sejarah->judul }}" required>
        </div>
        <div class="form-group">
            <label for="sub_judul">Sub Judul</label>
            <input type="text" name="sub_judul" id="sub_judul" class="form-control" value="{{ $sejarah->sub_judul }}" required>
        </div>
        <div class="form-group">
            <label for="judul_keterangan">Judul Keterangan</label>
            <input type="text" name="judul_keterangan" id="judul_keterangan" class="form-control" value="{{ $sejarah->judul_keterangan }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" required>{{ $sejarah->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.sejarah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
