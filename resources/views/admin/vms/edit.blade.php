@extends('admin.dashboard')

@section('admin-content')
    <h1>Edit Data VMS</h1>

    <form action="{{ route('admin.vms.update', $vms->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="visi">Visi</label>
            <textarea class="form-control " name="visi" id="visi" rows="5" style="height: 200px;">{{ $vms->visi }}</textarea>
            @error('visi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="misi">Misi</label>
            <textarea class="form-control " name="misi" id="misi" rows="5" style="height: 200px;">{{ $vms->misi }}</textarea>
            @error('misi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="strategi">Strategi</label>
            <textarea class="form-control " name="strategi" id="strategi" rows="5" style="height: 200px;">{{ $vms->strategi }}</textarea>
            @error('strategi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>


@endsection
