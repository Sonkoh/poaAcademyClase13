
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Hola!, <?php echo e($user); ?></h1>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mrjol\OneDrive\Documentos\laravel-test\resources\views/partials/user.blade.php ENDPATH**/ ?>