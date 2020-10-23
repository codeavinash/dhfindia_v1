<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/contactUs.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

<div class="displayContainer">


    <div class="boxContainer f-ja-ac">
        <div class="box orange"> 
            <div class="imageBox f-jc-ac">
                <img src="<?php echo e(asset('networkingFiles/svgs/logo.svg')); ?>" alt="DHF INDIA" >
            </div>

            <div class="contactDetails">
                <h3>contact us on</h3>
                <ul>
                    <li><i class="im im-phone"></i>8319686409</li>
                    <li><i class="im im-phone"></i>9111906974 </li>
                    <li><i class="im im-whatsapp"></i>9009560661</li>
                    <li><i class="im im-whatsapp"></i>9630878271</li>
                </ul>
            </div>
        </div>
        <div class="box white">
            <form action="" method="post" class="contactUsForm">
                <?php echo csrf_field(); ?>
                <h3>contact us by filling the form</h3>
                <label for="name">enter your name</label>
                <input type="text" name="name" required>
                <label for="number">enert your phone number</label>
                <input type="number" name='phoneNumber'required>
                <label for="message">enter you message</label>
                <textarea name="message" id="message"></textarea>
                <button name="submit" class="submitBtn">submit</button>
            </form>
        </div>
    </div>

    <div class="backgroundBox">

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/contactUs.blade.php ENDPATH**/ ?>