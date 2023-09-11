@extends('homepage.index')

@section('content')

<div id="heroCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel Indicators -->
    <ol class="carousel-indicators">
        @foreach ($sliderFoto as $key => $foto)
            <li data-target="#heroCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>

    <!-- Carousel Slides -->
    <div class="carousel-inner">
        @foreach ($sliderFoto as $key => $foto)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $foto->gambar) }}" class="d-block w-100" alt="Slide {{ $key + 1 }}">
                <div class="carousel-caption">
                    <div class="caption-text">
                        <p>Selamat Datang Di Website Perumda Tirta Manuntung Balikpapan</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Carousel Controls -->
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    
    <div class="container-fluid bg-full">
        <div class="pengumuman row">
            <div class="col-md-5 offset-md-1 align-self-center">
                <h2 class="mb-4">Pengumuman Penting</h2>
                @foreach ($pengumumen->take(1) as $pengumuman)
                <div class="mb-4"> 
                    <div class="d-flex"> 
                        <div class="mr-5"> 
                            <img src="{{ asset('storage/assets/pengumuman.png') }}" alt="Image" width="400" height="300">
                        </div>
                        <div>
                            <h3>{{ $pengumuman->judul }}</h3>
                            <p>{{ $pengumuman->tanggal }}</p>
                            <pre>{{ $pengumuman->keterangan }}</pre>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    

    
    
<div class="container">
    <h2 class="mb-4">Berita Terbaru</h2> <!-- Tambahkan header di sini -->
    <div class="bak row">
        @foreach ($berita->take(4) as $artikel) <!-- Ambil hanya 4 berita terbaru -->
        <div class="col-md-3">
            <div class="mb-4"> 
                <img src="{{ asset('storage/images/' . $artikel->gambar) }}" alt="Content Image" width="250" height="200">
                <h3>{{ $artikel->judul }}</h3>
                <p>{{ $artikel->tanggal }}</p>
                <p>{{ $artikel->keterangan }}</p>
                <a href="{{ route('artikel.show', $artikel->id) }}" class="btn btn-primary">Baca Lebih Lanjut</a>
            </div>
        </div>
        @endforeach
    </div>
</div>



    {{ $berita->links() }} <!-- Menampilkan halaman paginasi -->
</div>


    
    



@endsection