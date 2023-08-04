@extends('admin.dashboard')

@section('admin-content')
    <h1>Edit Data VMS</h1>

    <form action="{{ route('admin.vms.update', $vms->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="visi">Visi</label>
            <textarea class="form-control tiny-mce" name="visi" id="visi" rows="5" style="height: 200px;">{{ $vms->visi }}</textarea>
            @error('visi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="misi">Misi</label>
            <textarea class="form-control tiny-mce" name="misi" id="misi" rows="5" style="height: 200px;">{{ $vms->misi }}</textarea>
            @error('misi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="strategi">Strategi</label>
            <textarea class="form-control tiny-mce" name="strategi" id="strategi" rows="5" style="height: 200px;">{{ $vms->strategi }}</textarea>
            @error('strategi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <!-- TinyMCE untuk setiap kolom -->
    <script src="https://cdn.tiny.cloud/1/fhnx5fbt5ehz1vnm070er1tz295erjsapr3jr7g3wdy808hw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi TinyMCE untuk setiap textarea dengan class tiny-mce
            tinymce.init({
                selector: 'textarea.tiny-mce',
                plugins: 'lists advlist',
                toolbar: 'undo redo | styleselect | bold italic underline | bullist numlist | alignleft aligncenter alignright alignjustify | outdent indent',
            });
        });
    </script>
    
@endsection
