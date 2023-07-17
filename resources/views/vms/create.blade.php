<!-- resources/views/vms/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Data VMS</h1>

    <form action="{{ route('vms.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="visi">Visi</label>
            <textarea class="form-control" name="visi" id="visi" rows="3">{{ old('visi') }}</textarea>
            @error('visi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="misi">Misi</label>
            <textarea class="form-control" name="misi" id="misi" rows="3">{{ old('misi') }}</textarea>
            @error('misi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="strategi">Strategi</label>
            <textarea class="form-control" name="strategi" id="strategi" rows="3">{{ old('strategi') }}</textarea>
            @error('strategi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
