<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/conponents/verifyEmail.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>
    <div class="sectionBox f-jc-ac">
        <div class="notificationBox">
            <h2><i class="im im-mail"></i>please verify your email address a new verification is send to your given email address </h2>
            <strong>dont got one then click the link below</strong>
            <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="resendBtn"><?php echo e(__('click here to request another')); ?></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/auth/verify.blade.php ENDPATH**/ ?>