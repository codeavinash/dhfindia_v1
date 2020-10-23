<?php $__env->startSection('headerFiles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/admin/uiOptions.css')); ?>">
<script src="<?php echo e(asset('js/pages/Admin/uioptions/showall.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

<div id="csrf" class="no-display"><?php echo e(csrf_token()); ?></div>


<?php $__currentLoopData = $bannerImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="backgoundImageStyle displayImgeBox" style="background-image:url('<?php echo e(asset($image->imageUrl)); ?>'); display:block ">
        <div class="deleteBtn f-jc-ac">
            <i class="im im-trash-can"></i>
            <span class="no-display"><?php echo e($image->id); ?></span>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<form action="/admin/uioptions/" method="post" class="no-display" id="submittingForm">
    <input type="hidden" name="_method" value="DELETE">
    <?php echo csrf_field(); ?>
    <input type="text" name="bannerId" id="formId">
    
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Admin/uiViews/showall.blade.php ENDPATH**/ ?>