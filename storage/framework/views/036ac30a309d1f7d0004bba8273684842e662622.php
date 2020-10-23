<?php $__env->startSection('headerFiles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/pages/users/showallCat.css')); ?>">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('managePost')): ?>
    <script src="<?php echo e(asset('js/pages/Admin/Posts/delete.js')); ?>" defer></script>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>



<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('managePost')): ?>
    <a href="<?php echo e(route('adminPostcat.create')); ?>" class="f-jc-ac addCatBtn"><i class="im im-plus-circle"></i>add new category</a>
    <a href="<?php echo e(route('adminpost.create')); ?>" class="f-jc-ac addCatBtn"><i class="im im-plus-circle"></i>add new post</a>
    
    <?php if(Session::has('message')): ?>
            <div class="message f-jc-ac">
                <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
    <?php endif; ?>



<?php if(count($postCat) == 0): ?>
<div class="notificationBox f-jc-ac">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('managePost')): ?>
    <i class="im im-frown-o"></i> no category found add some
    <?php else: ?>
    <i class="im im-frown-o"></i> sorry nothing to show
<?php endif; ?>
</div>
<?php else: ?>
<div class="BoxContainer f-ja-ac">
<?php $__currentLoopData = $postCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="catBox backgoundImageStyle" style="background-image: linear-gradient(rgba(0, 0, 0, 0),black),url('<?php echo e(asset($cat->thumbnailUrl)); ?>')">
        <div class="desBox">
            <h4><?php echo e($cat->name); ?></h4>
            <p><?php echo e(substr($cat->shortDescription, 0,  80)); ?>...</p>
        </div>
        <a href="<?php echo e(route('user.showPostbycat',$cat->id)); ?>"></a>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('managePost')): ?>
            <div class="moreBtnBox">
                <a href="<?php echo e(route('adminPostcat.edit',$cat->id)); ?>" class="f-jc-ac success"><i class="im im-edit"></i></a>
                <span class="f-jc-ac danger deleteBtn"><i class="im im-trash-can"></i><p class="no-display"><?php echo e($cat->id); ?></p></span>
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('managePost')): ?>
    <form action="" method="post" class="no-display" id="deleteCat">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
    </form>
<?php endif; ?>

<?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/showAllPostCat.blade.php ENDPATH**/ ?>