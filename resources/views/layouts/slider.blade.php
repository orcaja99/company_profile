@extends('layouts.app')

@section('slider')
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
@endsection