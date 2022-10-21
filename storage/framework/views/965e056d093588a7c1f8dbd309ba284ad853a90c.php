
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Hola!, <?php echo e($user); ?></h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($user["id"]); ?></th>
      <td><?php echo e($user["name"]); ?></td>
      <td><?php echo e($user["created_at"]); ?></td>
      <td><?php echo e($user["updated_at"]); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/laravel-test/resources/views/partials/user.blade.php ENDPATH**/ ?>