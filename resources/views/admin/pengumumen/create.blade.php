@extends('admin.dashboard')

@section('admin-content')
        <title>Tambah pengumuman</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-4">Tambah pengumuman</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('admin.pengumumen.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <textarea class="form-control " name="judul" id="judul" rows="3">{{ old('judul') }}</textarea>
                    @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
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