@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero">
    <h1>Jelajahi Keindahan Tasikmalaya</h1>
    <p>Temukan berbagai destinasi wisata alam dan budaya di Tasikmalaya.</p>
    <a href="{{ route('destinasi.index') }}" class="btn">Lihat Destinasi</a>
</section>

<section class="section">
    <h2>Destinasi Pilihan</h2>

    <div class="cards">
        @foreach ($destinasi as $item)
            <article class="card">
                <h3>{{ $item['nama'] }}</h3>
                <p>{{ $item['lokasi'] }}</p>
                <p>{{ $item['deskripsi'] }}</p>
                <a href="{{ route('destinasi.show', $item['slug']) }}">Lihat Detail</a>
            </article>
        @endforeach
    </div>
</section>
@endsection