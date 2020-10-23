<?php $__env->startSection('headerFiles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/admin/postCat.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mianContent'); ?>
<form action="<?php echo e(route('adminPostcat.store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="name">enter name of category</label>
    <input type="text" name="name" id="name" required>
    <label for="thumbnailUrl">add a new thumbnail</label>
    <input type="file" name="thumbnailUrl" id="thumbnailUrl">
    <div class="imageBox no-display">
    </div>
    <label for="shortDescription">Enter short Description</label>
    <input type="text" name="shortDescription" id="shortDescription">
    <button name="submit" class="submitBtn">
        create
    </button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Admin/Posts/addnewCat.blade.php ENDPATH**/ ?>