

<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-4 offset-4">
<?php echo e($post->caption); ?>

<img src="/storage/<?php echo e($post->image); ?>">
<a href="#">Follow</a>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bilal\Desktop\lara\resources\views/posts/show.blade.php ENDPATH**/ ?>