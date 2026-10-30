

<?php $__env->startSection('title', 'Daftar Destinasi'); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <h1>Daftar Destinasi Wisata</h1>
    <p>Berikut beberapa tempat wisata di Tasikmalaya.</p>

    <div class="cards">
        <?php $__currentLoopData = $destinasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="card">
                <h2><?php echo e($item['nama']); ?></h2>
                <p><strong>Lokasi:</strong> <?php echo e($item['lokasi']); ?></p>
                <p><strong>Kategori:</strong> <?php echo e($item['kategori']); ?></p>
                <p><?php echo e($item['deskripsi']); ?></p>
                <a href="<?php echo e(route('destinasi.show', $item['slug'])); ?>">Lihat Detail</a>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Windows\System32\jelajah-tasik\resources\views/pages/destinasi.blade.php ENDPATH**/ ?>