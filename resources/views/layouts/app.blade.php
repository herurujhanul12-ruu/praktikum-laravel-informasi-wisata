<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Jelajah Tasik</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <header>
        <nav class="navbar">
            <a href="{{ route('home') }}" class="logo">Jelajah Tasik</a>

            <div class="nav-links">
                <a href="{{ route('home') }}">Beranda</a>
                <a href="{{ route('destinasi.index') }}">Destinasi</a>
                <a href="{{ route('kategori') }}">Kategori</a>
                <a href="{{ route('tentang') }}">Tentang</a>
                <a href="{{ route('panduan') }}">Panduan</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© {{ date('Y') }} Jelajah Tasik - Informasi Wisata Tasikmalaya</p>
        <p>Heru Rujhanul Muharram | C2483207014 | PTI Semester 5</p>
    </footer>

</body>
</html>