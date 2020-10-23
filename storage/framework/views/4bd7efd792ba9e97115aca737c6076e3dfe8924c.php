<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/conponents/makeNotification.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>
    <div class="containerSection">

        <ul>
            <li><strong> make default notifications</strong></li>
            <li><a href="<?php echo e(route('admin.paymentNotification')); ?>">payment notification for all members</a></li>
        </ul>

        <form action="<?php echo e(route('admin.custumNotification')); ?>" method="post" id="notificationForm">

            <?php echo csrf_field(); ?>

            <label for="type">type</label>
            <select name="userType" id="type">
                <option value="user">user</option>
                <option value="member">member</option>
            </select>

            <label for="link">provide link</label>
            <input type="text" name="link" id="link">

            <label for="text">notification text</label>
            <input type="text" name="notificationText" id="text">

            <button class="submitbrn">submit</button>
        </form>

        <table border="1">
            <tr>
                <th>type</th>
                <th>text</th>
                <th>option</th>
            </tr>
            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($notification->type); ?></td>
                    <td><?php echo e($notification->notification); ?></td>
                    <td><a href="<?php echo e(route('admin.deleteNotification',$notification->id)); ?>">delete</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Admin/Users/makeNotification.blade.php ENDPATH**/ ?>