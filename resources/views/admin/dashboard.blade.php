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
            <a class="nav-link {{ request()->is('admin.sliderfoto*') ? 'active' : '' }}" href="{{ route('admin.sliderfoto.index') }}" >Slider Foto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.sejarah*') ? 'active' : '' }}" href="{{ route('admin.sejarah.index') }}" >Sejarah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.vms*') ? 'active' : '' }}" href="{{ route('admin.vms.index') }}">Visi Misi dan Sejarah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.berita*') ? 'active' : '' }}" href="{{ route('admin.berita.index') }}">artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.beritap*') ? 'active' : '' }}" href="{{ route('admin.beritap.index') }}">pristiwa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.dsb*') ? 'active' : '' }}" href="{{ route('admin.dsb.index') }}">Daftar Sambungan Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.ipam*') ? 'active' : '' }}" href="{{ route('admin.ipam.index') }}">IPAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.jp*') ? 'active' : '' }}" href="{{ route('admin.jp.index') }}">Jumlah Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.jpegawai*') ? 'active' : '' }}" href="{{ route('admin.jpegawai.index') }}">Jumalah Pegawain</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.kegiatan*') ? 'active' : '' }}" href="{{ route('admin.kegiatan.index') }}">kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.penghargaan*') ? 'active' : '' }}" href="{{ route('admin.penghargaan.index') }}">Penghargaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.pengumumen*') ? 'active' : '' }}" href="{{ route('admin.pengumumen.index') }}">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.sab*') ? 'active' : '' }}" href="{{ route('admin.sab.index') }}">Sumber Air Baku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.smt*') ? 'active' : '' }}" href="{{ route('admin.smt.index') }}">Struktur Manajemen Mutu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.gi*') ? 'active' : '' }}" href="{{ route('admin.gi.index') }}">Galeri IPA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('admin.so*') ? 'active' : '' }}" href="{{ route('admin.so.index') }}">Struktur Organisasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.tkp*') ? 'active' : '' }}" href="{{ route('admin.tkp.index') }}">Table Klasifikasi Pelanggan</a>
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

