@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('pengumuman.create') }}" class="btn btn-primary">Create Pengumuman</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengumuman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('pengumuman.show', $item->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('pengumuman.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
