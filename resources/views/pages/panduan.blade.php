@extends('layouts.app')

@section('title', 'Panduan Wisata')

@section('content')
<section class="section">
    <h1>Panduan Wisata</h1>
    <p>Beberapa tips sebelum mengunjungi tempat wisata:</p>

    <ol>
        @foreach ($panduan as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ol>
</section>
@endsection