@extends('homepage.index')

@section('content')


<div class="breadcrumbs-container">
  <div class="row">

      <div class="background-image-bc" style="background-image: url('{{ asset('storage/assets/bc.png') }}');"></div>

      <div class="text-content-bc col-12 text-center">
          <h2 id="custom-title">Pristiwa</h2>
          <ol>
              <li><a href="{{ route('homepage') }}" class="white-link">Home&nbsp; </a></li>
              <li>/&nbsp;Pristiwa</li>
          </ol>
      </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <div class=" detail-p col-md-12">
            <h2>{{ $beritap->judul }}</h2>
            <p>{{ $beritap->tanggal }}</p>
            <img src="{{ asset('storage/images/' . $beritap->gambar) }}" alt="Content Image" class="img-fluid">
            <p>{{ $beritap->keterangan }}</p>
            <a href="{{ route('pristiwa.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection