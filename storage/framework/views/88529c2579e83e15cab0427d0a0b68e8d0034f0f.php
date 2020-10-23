<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/users/myProfile.css')); ?>">
    <script src="<?php echo e(asset('js/pages/myprofile.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>
    <div class="profileCard">
        <div class="headInformation">
            <img src="<?php echo e(asset('networkingFiles/svgs/fullLogo.svg')); ?>" alt="" srcset="">
            <p><strong>head offive :</strong>village - chichirda , Post-Saida (Chakarbhata), Dist-Bilaspur (C.G)</p>
            <p><strong>working Add : </strong>3/ware House Road , Haribhumi Press , Bilaspur (C.G) </p>
            <strong>object : Development of the society Through The public Awarness</strong>
            <h1>we thankyou for becoming a user</h1>
        </div>

        <div class="backCircle f-jc-ac">
            <div style="background-image: linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.392)),url('<?php echo e(asset(Auth::user()->profilepic)); ?>')"></div>
            <form action="<?php echo e(route('user.changeProfile')); ?>" method="post" id="changeProfile" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label for="profilePic" class="f-jc-ac"><i class="im im-pencil"></i></label>
                <input type="file" name="profilepic" id="profilePic" class="no-display" >
            </form>
        </div>

        <div class="infoField">
            <strong>name</strong>
            <p><?php echo e(Auth::user()->name); ?></p>
        </div>

        

        <div class="infoField">
            <strong>email</strong>
            <p><?php echo e(Auth::user()->email); ?></p>
        </div>

        <div class="infoField">
            <strong>number</strong>
            <p><?php echo e(Auth::user()->number); ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/myProfile.blade.php ENDPATH**/ ?>