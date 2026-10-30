

<?php $__env->startSection('title', 'Kategori'); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <h1>Kategori Wisata</h1>
    <p>Pilih kategori wisata yang ingin kamu jelajahi.</p>

    <div class="cards">
        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="card">
                <h2><?php echo e($item); ?></h2>
                <p>Temukan pengalaman wisata kategori <?php echo e(strtolower($item)); ?> di Tasikmalaya.</p>
                <a href="<?php echo e(route('destinasi.index')); ?>">Lihat Destinasi</a>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Windows\System32\jelajah-tasik\resources\views/pages/kategori.blade.php ENDPATH**/ ?>