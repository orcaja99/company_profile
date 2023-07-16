@extends('layouts.app')

@section('content')
    <h1>Tambah Data Standart Manajemen Mutu</h1>

    <form action="{{ route('standart_manajemen_mutu.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="keterangan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
