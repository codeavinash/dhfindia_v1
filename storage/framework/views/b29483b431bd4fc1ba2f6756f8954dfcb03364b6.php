<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/users/otherMembers.css')); ?>">
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('mianContent'); ?>

    

    <div class="stateCard single" style="background-image: linear-gradient(rgba(0, 0, 0, 0),black),url('<?php echo e($state->backgroundImage); ?>')">
        <div class="title">
            <?php echo e($state->stateName); ?>

        </div>
    </div>

    <ul class="districtList">
        <li><strong>select a district</strong></li>
        <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="/user/otherMembers/<?php echo e($state->stateName); ?>/<?php echo e($distic->id); ?>"><?php echo e($distic->districtsName); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/showDistricts.blade.php ENDPATH**/ ?>