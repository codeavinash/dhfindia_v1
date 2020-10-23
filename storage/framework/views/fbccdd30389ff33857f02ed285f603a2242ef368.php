<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/users/donateUs.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>
    <div class="Containersection">
        <div class="paralaxhead f-jc-ac">
            <h2>donate us</h2>
        </div>

        <div class="detailsContainer f-ja-ac">
            <div class="bankDetaisContainer">
                <h4 class="f-jc-ac">bank details</h4>
                <table>
                    <tr>
                        <th>a/c holder</th>
                        <td>dinbandhu help foundation</td>
                    </tr>
                    <tr>
                        <th>bank name</th>
                        <td>yijaya bank</td>
                    </tr>
                    <tr>
                        <th>a/c number</th>
                        <td>78550100000115</td>
                    </tr>
                    <tr>
                        <th>ifsc code</th>
                        <td>yijb0007608</td>
                    </tr>
                    <tr>
                        <th>address</th>
                        <td>bilaspur chhattisgarh</td>
                    </tr>
                </table>
            </div>

            <img src="<?php echo e(asset('networkingFiles/images/paymet_barcode/WhatsApp Image 2020-10-04 at 8.09.52 AM.jpeg')); ?>" alt="" >
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/donateUs.blade.php ENDPATH**/ ?>