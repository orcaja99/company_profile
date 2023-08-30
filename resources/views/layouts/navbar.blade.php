@extends('layouts.app')

@section('slider')
<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach ($pengumumen as $pengumuman)
            <div class="swiper-slide">
                <h2>{{ $pengumuman->judul }}</h2>
                <p>{{ $pengumuman->tanggal }}</p>
                <p>{{ $pengumuman->keterangan }}</p>
            </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
@endsection