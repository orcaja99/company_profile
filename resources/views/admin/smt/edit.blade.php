@extends('admin.dashboard')

@section('admin-content')
    <h1>Edit Data smt</h1>

   <form action="{{ route('admin.smt.update', $smt->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <textarea class="form-control" name="judul" id="judul" rows="5" style="height: 200px;">{{ $smt->judul }}</textarea>
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan" rows="5" style="height: 200px;">{{ $smt->keterangan }}</textarea>
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>


    
@endsection
