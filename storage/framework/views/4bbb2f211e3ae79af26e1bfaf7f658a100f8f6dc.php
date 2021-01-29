<?php $__env->startSection('content'); ?>
<div class="container">
    <div class='row'>
    <div class='col-md-3'>
    <img src='/instagram/instag.png'>
    </div>
    <div class ='col-md-9'>
    </div >
    <h1><?php echo e($user['username']); ?></h1></div>
    <div>
    <?php echo e($user->profile->title); ?>


    </div>
    <div><?php echo e($user->profile->description); ?></div>

    </div>
    </div>
    <div class='row'>
<div class='col-md-4'>
<img src=''>
</div>

<div class='col-md-4'>
<img src=''>
</div>

<div class='col-md-4'>
<img src=''>
</div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bilal\Desktop\lara\resources\views/home.blade.php ENDPATH**/ ?>