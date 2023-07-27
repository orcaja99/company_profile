@extends('admin.dashboard')

@section('admin-content')
    <h1>Data VMS</h1>

    <a href="{{ route('vms.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Strategi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vms as $vm)
                <tr>
                    <td>{{ $vm->id }}</td>
                    <td>{{ $vm->visi }}</td>
                    <td>{{ $vm->misi }}</td>
                    <td>{{ $vm->strategi }}</td>
                    <td>
                        <a href="{{ route('vms.edit', $vm->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('vms.destroy', $vm->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
