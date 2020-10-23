<?php $__env->startSection('headerFiles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/admin/uiOptions.css')); ?>">
<script src="<?php echo e(asset('js/pages/Admin/uiOptions.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

<div class="containerBox">
    <form action="<?php echo e(route('adminuioptions.store')); ?>" method="post" enctype="multipart/form-data" accept="image/x-png,image/gif,image/jpeg">
        <?php echo csrf_field(); ?>
        <label for="bannerImge" class="UploadBtn f-jc-ac"><i class="im im-cloud-upload"></i>upload new
        </label>
        <input type="file" name="bannerImge" class="no-display" id="bannerImge">
        <div id="imagePreViewBox" class="backgoundImageStyle"></div>
        <button name="submit" class="submitBtn">submit</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Admin/uiViews/addnewBanner.blade.php ENDPATH**/ ?>