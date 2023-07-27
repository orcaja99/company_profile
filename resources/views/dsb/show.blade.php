@extends('admin.dashboard')

@section('admin-content')
    <h1>Detail dsb</h1>

    <p><strong>ID:</strong> {{ $dsb->id }}</p>
    <p><strong>Judul:</strong> {{ $dsb->judul }}</p>
    <p><strong>Keterangan:</strong> {{ $dsb->keterangan }}</p>

    <a href="{{ route('dsb.edit', $dsb->id) }}" class="btn btn-success">Edit</a>
    <form action="{{ route('dsb.destroy', $dsb->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
    </form>
@endsection
