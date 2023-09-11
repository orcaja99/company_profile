@extends('homepage.index')

@section('content')


<div class="breadcrumbs-container">
  <div class="row">

      <div class="background-image-bc" style="background-image: url('{{ asset('storage/assets/bc.png') }}');"></div>

      <div class="text-content-bc col-12 text-center">
          <h2 id="custom-title">Visi, Misi dan Strategi</h2>
          <ol>
              <li><a href="{{ route('homepage') }}" class="white-link">Home&nbsp; </a></li>
              <li>/&nbsp;Profile</li>
          </ol>
      </div>
  </div>
</div>


<section id="vms" class="vms">
  <div class="container">
      <div class="row justify-content-around gy-4">
          @foreach ($vms as $key => $vms)
              <div class="col-lg-12 d-flex flex-column justify-content-center">
                  <h3>VISI</h3><br>
                  <p>{{ $vms->visi}}</p>
                  <h3>MISI</h3><br>
                  <pre>{{ $vms->misi}}</pre>
                  <h3>STRATEGI</h3><br>
                  <pre>{{ $vms->strategi}}</pre>
              </div>
          @endforeach
      </div>
  </div>
</section>
@endsection