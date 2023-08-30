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
              <div class="col-lg-5 d-flex flex-column justify-content-center">
                  <h3>{{ $vms->visi}}</h3>
                  <h3>{{ $vms->misi}}</h3>
                  <h3>{{ $vms->strategi}}</h3>
              </div>
          @endforeach
      </div>
  </div>
</section>
@endsection