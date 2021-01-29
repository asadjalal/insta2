<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class='row'>
    <div class='col-md-3 '>
    <img src='/instagram/instag.png'>
<div>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update',$user->profile)): ?>
     <a href="/profile/<?php echo e($user->id); ?>/edit">Edit  Profile</a>
    <?php endif; ?>
</div>


   
    </div>
    
    <div class ='col-md-6'>
    
    <follow-button userid="<?php echo e($user->id); ?>" follows="<?php echo e($follows); ?>" ></follow-button>
    <div class="d-flex">
    <div class="pr-5" ><strong><?php echo e($user->posts->count()); ?></strong>Posts</div>
    <div class="pr-5"><strong><?php echo e($user->profile->followers->count()); ?></strong>Followers</div>
    <div class="pr-5"><strong><?php echo e($user->following->count()); ?></strong>Following</div>


    </div>
   
    
    <div>

    <h1><?php echo e($user['username']); ?></h1></div>
    <div>
    <?php echo e($user->profile->title); ?>


    </div>
    <div><?php echo e($user->profile->description); ?></div>
    </div>

    <div class='col-md-3'>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update',$user->profile)): ?>
    

    <a href="<?php echo e(url('/p/create')); ?>">Create  Post</a>
    
    <?php endif; ?>
     
    </div>
    </div>


    <div class='row'>
    <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class='col-md-4'>
   <a href="/p/<?php echo e($post->id); ?>">
   <img src="/storage/<?php echo e($post->image); ?>">
   </a>
   </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bilal\Desktop\lara\resources\views/profile/index.blade.php ENDPATH**/ ?>