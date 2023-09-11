@extends('admin.dashboard')

@section('admin-content')
    <h1>Edit Data Sejarah</h1>

    <form action="{{ route('admin.sejarah.update', $sejarah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <textarea class="form-control " name="judul" id="judul" rows="3" style="height: 100px;">{{ $sejarah->judul }}</textarea>
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control " name="keterangan" id="keterangan" rows="8" style="height: 400px;">{{ $sejarah->keterangan }}</textarea>
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

@endsection
