@extends('homepage.index')

@section('content')


<div class="breadcrumbs-container ">
  <div class="row">

      <div class="background-image-bc" style="background-image: url('{{ asset('storage/assets/bc.png') }}');"></div>

      <div class="text-content-bc  col-12 text-center">
          <h2 id="custom-title">Jumlah Pelanggan</h2>
          <ol>
              <li><a href="{{ route('homepage') }}" class="white-link">Home&nbsp; </a></li>
              <li>/&nbsp;Profile</li>
          </ol>
      </div>
  </div>
</div>


<section id="jp" class="jp">
  <div class="container">
      <div class="row justify-content-around gy-4">
          @foreach ($jp as $key => $jp)
              <div class="col-lg-12 col-md-10 d-flex flex-column justify-content-center">
                <img src="{{ asset('storage/' . $jp->gambar) }}" alt="jp" class="img-fluid w-100 h-100" >
              </div>
          @endforeach
      </div>
  </div>
</section>
@endsection