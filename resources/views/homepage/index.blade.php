<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a href="{{ route('homepage') }}">
        <img src="{{ asset('storage/assets/logo_pertama.png') }}" class="d-block">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('homepage')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownProfil">
                    <a class="dropdown-item" href="/homepage/standard-manajemen-mutu">Standar Manajemen Mutu</a>
                    <a class="dropdown-item" href="/homepage/sejarah">Sejarah Singkat</a>
                    <a class="dropdown-item" href="/homepage/struktur-organisasi">Struktur Organisasi</a>
                    <a class="dropdown-item" href="/homepage/jumlah-pelanggan">Jumlah Pelanggan</a>
                    <a class="dropdown-item" href="/homepage/visi-misi-strategi">Visi, Misi, dan Strategi</a>
                    <a class="dropdown-item" href="/homepage/jumlah-pegawai">Jumlah Pegawai</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/homepage/penghargaan">Penghargaan</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Info Pelanggan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownInfo">
                    <a class="dropdown-item" href="/homepage/daftar-sambungan-baru">Cara Daftar Sambungan Baru</a>
                    <a class="dropdown-item" href="/homepage/tabel-klasifikasi-pelanggan">Tabel Klasifikasi Pelanggan dan Tarif Air Berdasarkan Golongan Pelanggan</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Infrastruktur
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/homepage/sumber-air-baku">Sumber Air Baku</a>
                    <a class="dropdown-item" href="/homepage/instalasi-pengolahan-air-minum">Instalasi Pengolahan Air Minum</a>
                    <a class="dropdown-item" href="/homepage/galeri-ipa">Galeri IPA</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Berita
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/homepage/artikel">Artikel</a>
                    <a class="dropdown-item" href="/homepage/pristiwa">Pristiwa</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/homepage/kegiatan">kegiatan</a>
            </li>
        </ul>
    </div>
</nav>

<div>
    @yield('content')
</div>



<!-- Footer -->
<footer class="footer bg-dark text-light py-3" style="background-image: url('{{ asset('storage/assets/footer.png') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset('storage/assets/logo.png') }}" class="d-block w-10"><br>
                <p>
                    Perumda Tirta Manuntung <br>
                    Graha Tirta Building<br>
                    Jl. Ruhui Rahayu I, Balikpapan<br>
                    Kalimantan Timur<br>
                    Telp. Kantor (0542) 7218831 / 7218832<br>
                    Fax. Kantor(0542) 7218863<br>
                    Email: humas@tirtamanuntung.co.id<br>
                </p>
            </div>
            <div class="col-md-3">
                <h2>
                    Layanan Online Pelanggan
                </h2><br>
                <p><a href="https://pelanggan.tirtamanuntung.co.id">(Cek tagihan, Baca Meter Mandiri, Lapor Pengaduan)</a></p>
            </div>
            <div class="col-md-3">
                <h2>
                    INFO PELANGGAN
                </h2><br>
                <p><a href=#>Persyaratan Permohonan Menjadi Pelanggan</a></p>
            </div>
            <div class="col-md-2">
                <h2>
                    TAUTAN
                </h2><br>
                <p><a href="https://web.balikpapan.go.id/indeks">Pemerintah Kota Balikpapan</a></p>
            </div>
            <div class="col-md-2">
                <h2>
                    SOSIAL MEDIA
                </h2><br>
                <a href="https://www.instagram.com/tirtamanuntungbalikpapan/?hl=id">
                    <img src="{{ asset('storage/assets/instagram.png') }}" class="d-block">
                </a>
            </div>
        </div>
    </div>
    
    <hr class="my-3" style="border-color: white;">

    <div class="footer-legal text-center position-relative">
        <div class="container">
          <div class="copyright">
            Copyright &copy; 2021 - Perumda Tirta Manuntung Balikpapan
          </div>
        </div>
    </div>
</footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>
</html>
