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


<section id="penghargaan" class="penghargaan">
    <div class="container">
        <div class="row mb-4">
            @foreach ($penghargaan as $s)
            <div class="col-md-2 mx-auto">
                <img src="{{ asset('storage/images/' . $s->gambar) }}" alt="Content Image" width="200" height="200">
                <h3>{{ $s->judul }}</h3>
                <p> <img src="{{ asset('storage/assets/kalender.png') }}" alt="Calendar Icon" width="20" height="20"> {{ $s->tanggal }}</p>
                <a href="{{ route('penghargaan.show', $s->id) }}" class="btn btn-primary">Baca Lebih Lanjut</a>
            </div>
            @endforeach
        </div>
    
        {{ $penghargaan->links() }} <!-- Menampilkan halaman paginasi -->
    </div>
</section>


@endsection