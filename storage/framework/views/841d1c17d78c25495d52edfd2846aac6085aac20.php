<?php $__env->startSection('headerFiles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/users/otherMembers.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

    <h2><?php echo e($state->stateName); ?>

    
        <?php if($state->show == 0): ?>
        : hidden
        <?php else: ?>
        : showing
        <?php endif; ?></h2>

    <table border="1" class="districtTable">
        <tr>
            <th>name</th>
            <th>members</th>
            <th>action</th>
        </tr>

        <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <tr>
                <td><?php echo e($item->districtsName); ?></td>
                <td><a href="/user/otherMembers/<?php echo e($state->stateName); ?>/<?php echo e($item->id); ?>">members</a></td>
                <td>
                    <?php if($item->show == 0): ?>
                        <a href="/admin/showlocation/district/<?php echo e($item->id); ?>/show" class="f-jc-ac">show</a>
                        <?php else: ?>
                        <a href="/admin/showlocation/district/<?php echo e($item->id); ?>/hide" class="f-jc-ac">hide</a>
                    <?php endif; ?>
                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/districtTable.blade.php ENDPATH**/ ?>