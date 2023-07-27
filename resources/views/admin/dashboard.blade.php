<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
  <div class="container-fluid min-vh-100">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 bg-dark text-light py-4 sidebar">
        <h2 class= "title">Admin Dashboard</h2>
        <div class="title-line"></div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('sliderfoto*') ? 'active' : '' }}" href="{{ route('sliderfoto.index') }}" >Slider Foto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('sejarah*') ? 'active' : '' }}" href="{{ route('sejarah.index') }}" >Sejarah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('vms*') ? 'active' : '' }}" href="{{ route('vms.index') }}">Visi Misi dan Sejarah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('sliderfoto*') ? 'active' : '' }}" href="#">artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('sliderfoto*') ? 'active' : '' }}" href="#">pristiwa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar Sambungan Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">IPAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jumlah Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jumalah Pegawain</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Penghargaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sumber Air Baku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Struktur Manajemen Mutu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Struktur Organisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Table Klasifikasi Pelanggan</a>
          </li>
          <li class="nav-item">
            <li class="logout">
              <form action="{{ route('admin.logout') }}" method="POST">
                  @csrf
                  <button class="nav-link" type="submit">Logout</button>
              </form>   
            </li>     
          </li>
        </ul>
      </div>
      <!-- Main Content -->
      <div class="col-md-9 py-4 main-content">
        @yield('admin-content')
      </div>
    </div>
  </div>

</body>
</html>

