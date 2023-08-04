@extends('admin.dashboard')

@section('admin-content')
    <h1>Edit Data Sejarah</h1>

    <form action="{{ route('admin.sejarah.update', $sejarah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <textarea class="form-control tiny-mce" name="judul" id="judul" rows="3" style="height: 100px;">{{ $sejarah->judul }}</textarea>
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control tiny-mce" name="keterangan" id="keterangan" rows="8" style="height: 400px;">{{ $sejarah->keterangan }}</textarea>
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    
    <!-- TinyMCE untuk setiap kolom -->
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi TinyMCE untuk setiap textarea dengan class tiny-mce
            tinymce.init({
                selector: 'textarea.tiny-mce',
                plugins: 'lists advlist',
                toolbar: 'undo redo | styleselect | bold italic underline | bullist numlist | alignleft aligncenter alignright alignjustify | outdent indent',
            });
        });
    </script>
@endsection
