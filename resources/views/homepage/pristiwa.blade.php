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


<section id="pristiwa" class="pristiwa">
    <div class="container">
        <div class="bak row">
            @foreach ($beritap as $pristiwa)
            <div class="col-md-3">
                <div class="mb-4"> 
                    <img src="{{ asset('storage/images/' . $pristiwa->gambar) }}" alt="Content Image" width="250" height="200">
                    <h3>{{ $pristiwa->judul }}</h3>
                    <p><img src="{{ asset('storage/assets/kalender.png') }}" alt="Calendar Icon" width="20" height="20"> {{ $pristiwa->tanggal }}</p>
                    <p>{{ $pristiwa->keterangan }}</p>
                    <a href="{{ route('pristiwa.show', $pristiwa->id) }}" class="btn btn-primary">Baca Lebih Lanjut</a> 
                </div>
            </div>
            @endforeach
        </div>
    
        @include('pagination', ['paginator' => $beritap])
    </div>
</section>


@endsection