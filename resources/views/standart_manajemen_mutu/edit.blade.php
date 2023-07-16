@extends('layouts.app')

@section('content')
    <h1>Edit Data Standart Manajemen Mutu</h1>

    <form action="{{ route('standart_manajemen_mutu.update', $standartManajemenMutu->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" value="{{ $standartManajemenMutu->judul }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{ $standartManajemenMutu->keterangan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
