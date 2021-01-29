

<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1><a href="/profile/<?php echo e($id->id); ?>"> <?php echo e($id->user->username); ?></a></h1>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container">
<div class="row">

<div class="col-md-6 offset-3 padding-top=7px padding-bottom=5px ">

<img src="/storage/<?php echo e($post->image); ?>"class="w-100">
<div><a href="/profile/<?php echo e($post->user->id); ?>"><strong><?php echo e($post->user->username); ?></strong></a></div>
<div>
<?php echo e($post->caption); ?>

</div>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $ps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="/profile/<?php echo e($p->id); ?>">  <?php echo e($p->username); ?></a>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bilal\Desktop\lara\resources\views/posts/index.blade.php ENDPATH**/ ?>