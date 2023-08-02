@extends('layouts.app')

@section('content')
    <!-- Your other content here -->

    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($sliderfoto as $key => $foto)
                <li data-target="#slider" data-slide-to="{{ $key }}" @if ($key === 0) class="active" @endif></li>
            @endforeach
        </ol>

        <div class="carousel-inner">
            @foreach ($sliderfoto as $key => $foto)
                <div class="carousel-item @if ($key === 0) active @endif">
                    <img src="{{ asset('storage/' . $foto->gambar) }}" alt="Gambar sliderfoto" width="1000" height="350">
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: green;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: green;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <h1>Pengumuman Penting</h1>
        <ul>
            @foreach($pengumumen as $pengumumen) <!-- Ubah nama variabel menjadi $pengumumens -->
                <li>
                    <h1>{{ $pengumumen->judul }}</h1>
                    <p>Tanggal: {{ $pengumumen->tanggal }}</p>
                    <p>Keterangan: {{ $pengumumen->keterangan }}</p>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="container">
        <h1>Berita Terbaru</h1>
        <ul>
            @foreach($berita as $item)
                @php
                    $selisihHari = now()->diffInDays($item->tanggal);
                @endphp

                @if($selisihHari <= 7)
                    <li>
                        <h2>{{ $item->judul }}</h2>
                        <img src="{{ asset('storage/images/' . $item->gambar) }}" alt="Gambar berita">
                        <p>{{ $item->tanggal }}</p>
                        <p>{{ $item->keterangan }}</p>
                        <a href="{{ route('customer.berita.berita.show', ['id' => $item->id]) }}">Lihat Detail</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    <div class="container">
        <h1>Berita Peristiwa Terbaru</h1>
        <ul>
            @foreach($beritap as $item)
                @php
                    $selisihHari = now()->diffInDays($item->tanggal);
                @endphp

                @if($selisihHari <= 7)
                    <li>
                        <h2>{{ $item->judul }}</h2>
                        <img src="{{ asset('storage/images/' . $item->gambar) }}" alt="Gambar beritap">
                        <p>{{ $item->tanggal }}</p>
                        <p>{{ $item->keterangan }}</p>
                        <a href="{{ route('customer.beritap.beritap.show', ['id' => $item->id]) }}">Lihat Detail</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#slider').carousel({
                interval: 2500 // Ganti nilai 3000 dengan durasi dalam milidetik untuk mengganti slide (misalnya 3000 untuk 3 detik).
            });

            // Tombol panah kiri dan kanan
            $('.carousel-control-prev').on('click', function() {
                $('#slider').carousel('prev');
            });

            $('.carousel-control-next').on('click', function() {
                $('#slider').carousel('next');
            });
        });
    </script>
@endsection
