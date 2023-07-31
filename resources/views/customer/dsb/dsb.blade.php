<!-- resources/views/customer/berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Sambungan</h1>
        <ul>
            @foreach($dsb as $data)
                <li>
                    <h2>{{ $data->judul }}</h2>
                    <p>{{ $data->keterangan }}</p>
                    <a href="{{ route('customer.dsb.dsb.show', ['id' => $data->id]) }}">Lihat Detail</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
