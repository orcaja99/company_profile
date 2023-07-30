<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <script src="{{ asset('js/dashboard.js') }}"></script>

</head>
<body>
  <div class="container-fluid min-vh-100">
    <div class="row">
      <div class="col-md-2 bg-dark text-light py-4 sidebar" id="sidebar">
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
            <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}" href="{{ route('berita.index') }}">artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('beritap*') ? 'active' : '' }}" href="{{ route('beritap.index') }}">pristiwa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('dsb*') ? 'active' : '' }}" href="{{ route('dsb.index') }}">Daftar Sambungan Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('ipam*') ? 'active' : '' }}" href="{{ route('ipam.index') }}">IPAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('jp*') ? 'active' : '' }}" href="{{ route('jp.index') }}">Jumlah Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('jpegawai*') ? 'active' : '' }}" href="{{ route('jpegawai.index') }}">Jumalah Pegawain</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('kegiatan*') ? 'active' : '' }}" href="{{ route('kegiatan.index') }}">kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('penghargaan*') ? 'active' : '' }}" href="{{ route('penghargaan.index') }}">Penghargaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('pengumumen*') ? 'active' : '' }}" href="{{ route('pengumumen.index') }}">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('sab*') ? 'active' : '' }}" href="{{ route('sab.index') }}">Sumber Air Baku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('smt*') ? 'active' : '' }}" href="{{ route('smt.index') }}">Struktur Manajemen Mutu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('so*') ? 'active' : '' }}" href="{{ route('so.index') }}">Struktur Organisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('tkp*') ? 'active' : '' }}" href="{{ route('tkp.index') }}">Table Klasifikasi Pelanggan</a>
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

