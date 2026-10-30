@extends('layouts.app')

@section('title', $destinasi['nama'])

@section('content')
<section class="section">
    <article class="detail">
        <h1>{{ $destinasi['nama'] }}</h1>

        <p><strong>Lokasi:</strong> {{ $destinasi['lokasi'] }}</p>
        <p><strong>Kategori:</strong> {{ $destinasi['kategori'] }}</p>

        <p>{{ $destinasi['deskripsi'] }}</p>

        <h2>Aktivitas Wisata</h2>

        <ul>
            @foreach ($destinasi['aktivitas'] as $aktivitas)
                <li>{{ $aktivitas }}</li>
            @endforeach
        </ul>

        <a href="{{ route('destinasi.index') }}" class="btn">Kembali ke Destinasi</a>
    </article>
</section>
@endsection