

<?php $__env->startSection('title', 'Panduan Wisata'); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <h1>Panduan Wisata</h1>
    <p>Beberapa tips sebelum mengunjungi tempat wisata:</p>

    <ol>
        <?php $__currentLoopData = $panduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Windows\System32\jelajah-tasik\resources\views/pages/panduan.blade.php ENDPATH**/ ?>