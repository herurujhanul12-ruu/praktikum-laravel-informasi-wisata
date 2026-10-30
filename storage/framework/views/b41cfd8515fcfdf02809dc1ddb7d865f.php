<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> | Jelajah Tasik</title>
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
</head>
<body>

    <header>
        <nav class="navbar">
            <a href="<?php echo e(route('home')); ?>" class="logo">Jelajah Tasik</a>

            <div class="nav-links">
                <a href="<?php echo e(route('home')); ?>">Beranda</a>
                <a href="<?php echo e(route('destinasi.index')); ?>">Destinasi</a>
                <a href="<?php echo e(route('kategori')); ?>">Kategori</a>
                <a href="<?php echo e(route('tentang')); ?>">Tentang</a>
                <a href="<?php echo e(route('panduan')); ?>">Panduan</a>
            </div>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>© <?php echo e(date('Y')); ?> Jelajah Tasik - Informasi Wisata Tasikmalaya</p>
        <p>Heru Rujhanul Muharram | C2483207014 | PTI Semester 5</p>
    </footer>

</body>
</html><?php /**PATH C:\Windows\System32\jelajah-tasik\resources\views/layouts/app.blade.php ENDPATH**/ ?>