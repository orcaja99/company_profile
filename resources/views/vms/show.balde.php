<!-- resources/views/vms/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Data VMS</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Visi</h5>
            <p class="card-text">{{ $vms->visi }}</p>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Misi</h5>
            <p class="card-text">{{ $vms->misi }}</p>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Strategi</h5>
            <p class="card-text">{{ $vms->strategi }}</p>
        </div>
    </div>

    <a href="{{ route('vms.edit', $vms->id) }}" class="btn btn-primary mt-3">Edit</a>
    <form action="{{ route('vms.destroy', $vms->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
    </form>
@endsection
