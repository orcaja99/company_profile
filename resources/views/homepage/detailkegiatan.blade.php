@extends('homepage.index')

@section('content')


<div class="breadcrumbs-container">
  <div class="row">

      <div class="background-image-bc" style="background-image: url('{{ asset('storage/assets/bc.png') }}');"></div>

      <div class="text-content-bc col-12 text-center">
          <h2 id="custom-title">Kegiatan</h2>
          <ol>
              <li><a href="{{ route('homepage') }}" class="white-link">Home&nbsp; </a></li>
              <li>/&nbsp;Kegiatan</li>
          </ol>
      </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <div class=" detail-p col-md-12">
            <h2>{{ $kegiatan->judul }}</h2>
            <p>{{ $kegiatan->tanggal }}</p>
            <img src="{{ asset('storage/images/' . $kegiatan->gambar) }}" alt="Content Image" class="img-fluid">
            <p>{{ $kegiatan->keterangan }}</p>
            <a href="{{ route('kegiatan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection