<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/users/otherMembers.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

    <div class="section">
        <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <div class="stateCard" style="background-image: linear-gradient(rgba(231, 68, 68, 0),black),url('<?php echo e($state->backgroundImage); ?>')">

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                <a href="<?php echo e(route('admin.showDistrictTable',$state->id)); ?>" class="redirect"></a>
                
                <?php else: ?>
                <a href="<?php echo e(route('user.showDistricts',$state->stateName)); ?>" class="redirect"></a>

                <?php endif; ?>
                <div class="title">
                    <?php echo e($state->stateName); ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                    <?php if($state->show == 0): ?>
                    : hidden
                    <?php else: ?>
                    : showing
                    <?php endif; ?>
                    <?php endif; ?>
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                    <div class="editBox">
                        <?php if($state->show == 0): ?>
                        <a href="/admin/showlocation/state/<?php echo e($state->id); ?>/show" class="f-jc-ac">show</a>
                        <?php else: ?>
                        <a href="/admin/showlocation/state/<?php echo e($state->id); ?>/hide" class="f-jc-ac">hide</a>
                        <?php endif; ?>

                        <form action="<?php echo e(route('admin.changeImage',$state->id)); ?>" method="get">
                            <input type="text" name="backgoundImage" placeholder="enter image url">
                            <button>submit</button>
                        </form>
                    </div>
                <?php endif; ?>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/showStates.blade.php ENDPATH**/ ?>