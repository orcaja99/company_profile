@extends('admin.dashboard')

@section('admin-content')
    <h1>Tambah Data Sejarah</h1>

    <form action="{{ route('sejarah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="sub_judul">Sub Judul</label>
            <input type="text" name="sub_judul" id="sub_judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="judul_keterangan">Judul Keterangan</label>
            <input type="text" name="judul_keterangan" id="judul_keterangan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('sejarah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
