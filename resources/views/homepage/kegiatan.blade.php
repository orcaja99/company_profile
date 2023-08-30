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


<section id="penghargaan" class="penghargaan">
    <div class="container">
        <div class="kegiatan row mb-4">
            @foreach ($kegiatan as $k)
            <div class="col-md-2 mx-auto">
                <img src="{{ asset('storage/images/' . $k->gambar) }}" alt="Content Image" width="200" height="200">
                <h3>{{ $k->judul }}</h3>
                <p>{{ $k->tanggal }}</p>
                <a href="{{ route('kegiatan.show', $k->id) }}" class="btn btn-primary">Baca Lebih Lanjut</a>
            </div>
            @endforeach
        </div>
    
        {{ $kegiatan->links() }} <!-- Menampilkan halaman paginasi -->
    </div>
</section>


@endsection