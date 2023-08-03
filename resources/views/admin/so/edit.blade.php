@extends('admin.dashboard')

@section('admin-content')
    <h1>Edit Stuktur Organisasi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.so.update', $so->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
