<!DOCTYPE html>
<html>
<head>
    <title>PDAM Company Profile</title>
    <!-- Add your CSS and other head elements here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles for the navbar */
        nav {
            background-color: #007BFF;
        }

        nav a {
            color: #FFFFFF;
            font-weight: bold;
        }

        nav a:hover {
            color: #FFFFFF;
            text-decoration: none;
        }

        .container {
            padding-top: 20px;
        }

        .content {
            padding: 20px;
        }

        /* Styles for the slider */
        .slider {
            position: relative;
            overflow: hidden;
        }

        .slider-item {
            display: none;
        }

        .slider-item.active {
            display: block;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('customer.berita.berita.index') }}">PDAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.berita.berita.index') }}">Berita Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.beritap.beritap.index') }}">Berita Peristiwa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.dsb.dsb.index') }}"> Cara Daftar Sambungan </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.kegiatan.kegiatan.index') }}"> Kegiatan </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.sab.sab.index') }}"> SAB </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>

<!-- Add your scripts or other content here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@yield('scripts') <!-- This will include the JavaScript code from home.blade.php -->
</body>
</html>
