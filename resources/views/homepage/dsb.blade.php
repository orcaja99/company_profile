@extends('homepage.index')

@section('content')


<div class="breadcrumbs-container">
  <div class="row">

      <div class="background-image-bc" style="background-image: url('{{ asset('storage/assets/bc.png') }}');"></div>

      <div class="text-content-bc col-12 text-center">
          <h2 id="custom-title">Daftar Sambungan Baru</h2>
          <ol>
              <li><a href="{{ route('homepage') }}" class="white-link">Home&nbsp; </a></li>
              <li>/&nbsp;Info Pelanggan</li>
          </ol>
      </div>
  </div>
</div>


<section id="dsb" class="dsb">
  <div class="container">
      <div class="row justify-content-around gy-4">
          @foreach ($dsb as $key => $dsb)
              <div class="col-lg-12 d-flex flex-column justify-content-center">
                  <h3>{{ $dsb->judul}}</h3>
                  <pre>{{ $dsb->keterangan}}</pre>
              </div>
          @endforeach
      </div>
  </div>
</section>
@endsection