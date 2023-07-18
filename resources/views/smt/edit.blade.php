<!-- resources/views/smt/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit SMT</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('smt.update', $smt->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $smt->judul }}">
        </div>
        <div class="form-group">
            <label for="sub_judul">Sub Judul</label>
            <input type="text" class="form-control" id="sub_judul" name="sub_judul" value="{{ $smt->sub_judul }}">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan">{{ $smt->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection