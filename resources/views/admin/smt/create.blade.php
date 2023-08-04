@extends('admin.dashboard')

@section('admin-content')
    <h1>Tambah Data Struktur Manajemen Mutu</h1>

    <form action="{{ route('admin.smt.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <textarea class="form-control tinymce" name="judul" id="judul" rows="3">{{ old('judul') }}</textarea>
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control tinymce" name="keterangan" id="keterangan" rows="3">{{ old('keterangan') }}</textarea>
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    
    <script src="https://cdn.tiny.cloud/1/fhnx5fbt5ehz1vnm070er1tz295erjsapr3jr7g3wdy808hw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            tinymce.init({
                selector: '.tinymce',
                plugins: 'lists advlist',
                toolbar: 'undo redo | styleselect | bold italic underline | bullist numlist | alignleft aligncenter alignright alignjustify | outdent indent',
            });
        });
    </script>
@endsection
