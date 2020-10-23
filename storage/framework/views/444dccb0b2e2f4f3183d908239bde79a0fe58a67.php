<?php $__env->startSection('headerFiles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/admin/uiOptions.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

<div class="containerBox">
    <h4>home bannet options</h4>
    <div class="buttoncontainer f-ja-ac">
        <a href="" >add a new banner</a>
        <a href="">show all banner</a>
        <a href="">delete banner</a>
        <a href="">change position of banner</a>
    </div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Admin/uiOptions.blade.php ENDPATH**/ ?>