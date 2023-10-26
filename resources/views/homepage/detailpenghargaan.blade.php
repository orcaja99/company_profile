@extends('homepage.index')

@section('content')


<div class="breadcrumbs-container">
  <div class="row">

      <div class="background-image-bc" style="background-image: url('{{ asset('storage/assets/bc.png') }}');"></div>

      <div class="text-content-bc col-12 text-center">
          <h2 id="custom-title">penghargaan</h2>
          <ol>
              <li><a href="{{ route('homepage') }}" class="white-link">Home&nbsp; </a></li>
              <li>/&nbsp;Penghargaan</li>
          </ol>
      </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <div class=" detail-p col-md-12">
            <h2>{{ $penghargaan->judul }}</h2>
            <p> <img src="{{ asset('storage/assets/kalender.png') }}" alt="Calendar Icon" width="20" height="20"> {{ $penghargaan->tanggal }}</p>
            <img src="{{ asset('storage/images/' . $penghargaan->gambar) }}" alt="Content Image" class="img-fluid">
            <p>{{ $penghargaan->keterangan }}</p>
            <a href="{{ route('penghargaan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection