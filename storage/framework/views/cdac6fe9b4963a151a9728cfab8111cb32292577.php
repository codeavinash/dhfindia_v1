<?php $__env->startSection('headerFiles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/pages/users/showallPost.css')); ?>">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('managePost')): ?>
    
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

<div class='container f-jb-ac'>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="postBox backgoundImageStyle" style="background-image: linear-gradient(rgba(0, 0, 0, 0),black),url('<?php echo e(asset($post->thumbnailUrl)); ?>')">
            <div class="contentBox">
                <h4><?php echo e($post->name); ?></h4>
                <p><?php echo e(substr($post->shortDescription, 0,  80)); ?>...</p>
            </div>
            <a href="<?php echo e(route('user.showSinglePost',$post->id)); ?>"></a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/showPostbycat.blade.php ENDPATH**/ ?>