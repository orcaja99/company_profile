@extends('homepage.index')

@section('content')
<!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#heroCarousel" data-slide-to="1"></li>
            <li data-target="#heroCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Carousel Slides -->
    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            @foreach ($sliderFoto  as $key => $foto)
                <li data-target="#heroCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>

        <!-- Carousel Slides -->
        <div class="carousel-inner">
            @foreach ($sliderFoto  as $key => $foto)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $foto->gambar) }}" class="d-block w-100" alt="Slide {{ $key + 1 }}">
                    <div class="carousel-caption">
                        <h3>Slide {{ $key + 1 }}</h3>
                        <p>Selamat Datang Di Website Perumda Tirta Manuntung Balikpapan</p>
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
    </div>


<div class="container-fluid bg-konten-1">
    <div class="section-header text-center position-relative">
        <h2>Pengumuman Penting</h2>
    </div>
    <div class="row gy-4" id="pengumuman-container">
        @foreach ($pengumumen as $key => $pengumuman)
            <div class="col-lg-4 col-md-6 service-item {{ $key > 0 ? 'd-none' : '' }}">
                <div class="icon">
                    <i class="fa-solid fa-mountain-city"></i>
                </div>
                <h3>{{ $pengumuman->judul }}</h3>
                <p>{{ $pengumuman->tanggal }}</p>
                <p>{{ $pengumuman->keterangan }}</p>
            </div>
        @endforeach
    </div>
    <div class="text-center">
        <button id="scrollToNext" class="btn btn-primary">Selanjutnya</button>
    </div>
</div>

    
    

    <div class="container-fluid bg-konten-2">
        <div class="row">
            <div class="col-md-12">
                <h2>Berita Terbaru</h2>
                <p>Ini adalah konten baru yang Anda tambahkan di bawah Carousel.</p>
            </div>
        </div>
    </div>

    
    



@endsection