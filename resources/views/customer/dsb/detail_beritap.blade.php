<!-- resources/views/customer/detail_berita.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Berita</h1>
        <h2>{{ $dsb->judul }}</h2>
        <p>{{ $beritap->keterangan }}</p>
        <a href="{{ route('customer.dsb.dsb.index') }}">Kembali ke Daftar Berita</a>
    </div>
@endsection
