@extends('admin.dashboard')

@section('admin-content')

        <h1>Edit penghargaan</h1>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('admin.penghargaan.update', $penghargaan->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <div class="form-group">
                <label for="judul">Judul</label>
                <textarea class="form-control tiny-mce" name="judul" id="judul" rows="5" style="height: 200px;">{{ $penghargaan->judul }}</textarea>
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="gambar">Gambar:</label>
                <input type="file" id="gambar" name="gambar">
                @if($penghargaan->gambar)
                <img src="{{ asset('storage/images/' . $penghargaan->gambar) }}" alt="Gambar penghargaan" width="100">
                @endif
            </div>
            <div>
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $penghargaan->tanggal }}" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control tiny-mce" name="keterangan" id="keterangan" rows="5" style="height: 200px;">{{ $penghargaan->keterangan }}</textarea>
                @error('keterangan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </form>
    
@endsection