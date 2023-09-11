@extends('homepage.index')

@section('content')


<div class="breadcrumbs-container  ">
  <div class="row ">
      <!-- Background Image (Positioned at the top) -->
      <div class="background-image-bc" style="background-image: url('{{ asset('storage/assets/bc.png') }}');"></div>

      <!-- Text Content (Positioned below the navbar) -->
      <div class="text-content-bc  col-12 text-center">
          <h2 id="custom-title">Standard Manajemen Mutu</h2>
          <ol>
              <li><a href="{{ route('homepage') }}"s  class="white-link">Home&nbsp; </a></li>
              <li>/&nbsp;Profile</li>
          </ol>
      </div>
  </div>
</div>


<section id="smm" class="smm">
  <div class="container">
      <div class="row justify-content-around gy-4">
          @foreach ($smm as $key => $smt)
              <div class="col-lg-12 d-flex flex-column justify-content-center">
                  <h3>{{ $smt->judul}}</h3>
                  <pre>{{ $smt->keterangan}}</pre>
              </div>
          @endforeach
      </div>
  </div>
</section>
@endsection