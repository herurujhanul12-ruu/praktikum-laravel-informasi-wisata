

<?php $__env->startSection('title', $destinasi['nama']); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <article class="detail">
        <h1><?php echo e($destinasi['nama']); ?></h1>

        <p><strong>Lokasi:</strong> <?php echo e($destinasi['lokasi']); ?></p>
        <p><strong>Kategori:</strong> <?php echo e($destinasi['kategori']); ?></p>

        <p><?php echo e($destinasi['deskripsi']); ?></p>

        <h2>Aktivitas Wisata</h2>

        <ul>
            <?php $__currentLoopData = $destinasi['aktivitas']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aktivitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($aktivitas); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <a href="<?php echo e(route('destinasi.index')); ?>" class="btn">Kembali ke Destinasi</a>
    </article>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Windows\System32\jelajah-tasik\resources\views/pages/detail.blade.php ENDPATH**/ ?>