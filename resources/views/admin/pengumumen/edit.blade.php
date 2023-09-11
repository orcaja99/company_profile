@extends('admin.dashboard')

@section('admin-content')

        <h1>Edit pengumuman</h1>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('admin.pengumumen.update', $pengumumen->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <div class="form-group">
                <label for="judul">Judul</label>
                <textarea class="form-control " name="judul" id="judul" rows="5" style="height: 200px;">{{ $pengumumen->judul }}</textarea>
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $pengumumen->tanggal }}" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control " name="keterangan" id="keterangan" rows="5" style="height: 200px;">{{ $pengumumen->keterangan }}</textarea>
                @error('keterangan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>


    
@endsection