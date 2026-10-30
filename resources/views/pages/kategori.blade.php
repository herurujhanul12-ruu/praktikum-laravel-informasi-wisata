@extends('layouts.app')

@section('title', 'Kategori')

@section('content')
<section class="section">
    <h1>Kategori Wisata</h1>
    <p>Pilih kategori wisata yang ingin kamu jelajahi.</p>

    <div class="cards">
        @foreach ($kategori as $item)
            <article class="card">
                <h2>{{ $item }}</h2>
                <p>Temukan pengalaman wisata kategori {{ strtolower($item) }} di Tasikmalaya.</p>
                <a href="{{ route('destinasi.index') }}">Lihat Destinasi</a>
            </article>
        @endforeach
    </div>
</section>
@endsection