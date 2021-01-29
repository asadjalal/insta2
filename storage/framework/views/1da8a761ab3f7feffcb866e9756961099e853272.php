

<?php $__env->startSection('content'); ?>
<div class='container'>
<form action="/p" enctype='multipart/form-data' method='post'>
<div class="row">
<h1>Add New Post</h1>
</div>
<div class=" row">
<?php echo csrf_field(); ?>
                            <div class="col-md-8 offset-2">
                            <label for="caption" class="col-md-4 col-form-label "><?php echo e(__('Caption')); ?></label>

                                <input id="caption" name="caption" type="text" class="form-control <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="caption" value="<?php echo e(old('caption')); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                </div>
                                <div class='row'>
                                <div class='col-md-8 offset-2'>
                            <label for="image" class="col-md-4 col-form-label "><?php echo e(__('Image')); ?></label>
                              
                               <input type='file' name="image" class='form-cntrol-file' id='image' name='image'>
                               <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                               </div>
                                </div>
                                <div class="row">
                                <div class="col-md-8 offset-2">
                              <button class="btn btn-primary">Add Post</button>
                              </div>
                                </div>
                                </form>
                                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bilal\Desktop\lara\resources\views/posts/create.blade.php ENDPATH**/ ?>