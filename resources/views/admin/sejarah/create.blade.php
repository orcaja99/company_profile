@extends('admin.dashboard')

@section('admin-content')
    <h1>Tambah Data Sejarah</h1>

    <form action="{{ route('admin.sejarah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <textarea class="form-control" name="judul" id="judul" rows="3">{{ old('judul') }}</textarea>
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control " name="keterangan" id="keterangan" rows="3">{{ old('keterangan') }}</textarea>
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    

@endsection
