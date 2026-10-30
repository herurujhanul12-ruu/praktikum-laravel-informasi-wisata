

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero">
    <h1>Jelajahi Keindahan Tasikmalaya</h1>
    <p>Temukan berbagai destinasi wisata alam dan budaya di Tasikmalaya.</p>
    <a href="<?php echo e(route('destinasi.index')); ?>" class="btn">Lihat Destinasi</a>
</section>

<section class="section">
    <h2>Destinasi Pilihan</h2>

    <div class="cards">
        <?php $__currentLoopData = $destinasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="card">
                <h3><?php echo e($item['nama']); ?></h3>
                <p><?php echo e($item['lokasi']); ?></p>
                <p><?php echo e($item['deskripsi']); ?></p>
                <a href="<?php echo e(route('destinasi.show', $item['slug'])); ?>">Lihat Detail</a>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Windows\System32\jelajah-tasik\resources\views/pages/home.blade.php ENDPATH**/ ?>