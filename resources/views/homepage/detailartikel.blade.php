@extends('homepage.index')

@section('content')


<div class="breadcrumbs-container">
  <div class="row">

      <div class="background-image-bc" style="background-image: url('{{ asset('storage/assets/bc.png') }}');"></div>

      <div class="text-content-bc col-12 text-center">
          <h2 id="custom-title">Artikel</h2>
          <ol>
              <li><a href="{{ route('homepage') }}" class="white-link">Home&nbsp; </a></li>
              <li>/&nbsp;Berita</li>
          </ol>
      </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <div class=" detail-p col-md-12">
            <h2>{{ $berita->judul }}</h2>
            <p>{{ $berita->tanggal }}</p>
            <img src="{{ asset('storage/images/' . $berita->gambar) }}" alt="Content Image" class="img-fluid">
            <p>{{ $berita->keterangan }}</p>
            <a href="{{ route('artikel.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection