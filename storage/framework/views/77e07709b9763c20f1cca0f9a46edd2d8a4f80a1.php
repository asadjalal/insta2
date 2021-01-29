<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class='row'>
    <div class='col-md-3'>
    <img src='/instagram/instag.png'>
    <div><strong><?php echo e($user->post->count()); ?></strong>posts</div>

    </div>
    <div class ='col-md-6'>
    
    

    
    <div>
    <h1><?php echo e($user['username']); ?></h1></div>
    <div>
    <?php echo e($user->profile->title); ?>


    </div>
    <div><?php echo e($user->profile->description); ?></div>
    </div>

    <div class='col-md-3'>
    <a href="<?php echo e(url('p/create')); ?>">Create a post</a>
    </div>
    </div>


    <div class='row'>


     <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class='col-md-4'>

    <img src="/storage/<?php echo e($post->image); ?>">

      </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bilal\Desktop\lara\resources\views/index.blade.php ENDPATH**/ ?>