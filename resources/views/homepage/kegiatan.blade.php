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


<section id="kegiatan" class="kegiatan">
    <div class="container">
        <div class="bak row ">
            @foreach ($kegiatan as $k)
            <div class="col-md-3">
                <div class="mb-4"> 
                    <img src="{{ asset('storage/images/' . $k->gambar) }}" alt="Content Image" width="250" height="200">
                    <h3>{{ $k->judul }}</h3>
                    <p> <img src="{{ asset('storage/assets/kalender.png') }}" alt="Calendar Icon" width="20" height="20"> {{ $k->tanggal }}</p>
                    <p>{{ $k->keterangan }}</p>
                    <p>sumber: {{ $k->sumber }}</p>
                    <a href="{{ route('kegiatan.show', $k->id) }}" class="btn btn-primary">Baca Lebih Lanjut</a>
                </div>
            </div>
            @endforeach
        </div>
    
        {{ $kegiatan->links() }} <!-- Menampilkan halaman paginasi -->
    </div>
</section>


@endsection