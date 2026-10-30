@extends('layouts.app')

@section('title', 'Daftar Destinasi')

@section('content')
<section class="section">
    <h1>Daftar Destinasi Wisata</h1>
    <p>Berikut beberapa tempat wisata di Tasikmalaya.</p>

    <div class="cards">
        @foreach ($destinasi as $item)
            <article class="card">
                <h2>{{ $item['nama'] }}</h2>
                <p><strong>Lokasi:</strong> {{ $item['lokasi'] }}</p>
                <p><strong>Kategori:</strong> {{ $item['kategori'] }}</p>
                <p>{{ $item['deskripsi'] }}</p>
                <a href="{{ route('destinasi.show', $item['slug']) }}">Lihat Detail</a>
            </article>
        @endforeach
    </div>
</section>
@endsection