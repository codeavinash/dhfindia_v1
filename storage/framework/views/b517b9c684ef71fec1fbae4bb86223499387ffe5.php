<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/admin/validateUser.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

    <div class="section">

        <div class="profilePic" style="background-image: url('<?php echo e(asset($user->profilepic)); ?>')">

        </div>

        <div class="showDetails">
            <strong>approval status</strong>
            <p>
                <?php if($user->approved): ?>
                    approved
                    <?php else: ?>
                    not approved
                <?php endif; ?>
            </p>
        </div>

        <div class="showDetails">
            <strong>name</strong>
            <p><?php echo e($user->name); ?></p>
        </div>

        <div class="showDetails">
            <strong>user position</strong>
            <p><?php echo e($user->position); ?></p>
        </div>

        <div class="showDetails">
            <strong>phone number</strong>
            <p><?php echo e($user->number); ?></p>
        </div>

        <div class="showDetails">
            <strong>email address</strong>
            <p><?php echo e($user->email); ?></p>
        </div>

        <div class="showDetails">
            <strong>user state</strong>
            <p><?php echo e($user->state->stateName); ?></p>
        </div>

        <div class="showDetails">
            <strong>user district</strong>
            <p><?php echo e($user->district->districtsName); ?></p>
        </div>

        <div class="showDetails">
            <strong>user ablity</strong>
            <ul>

                

            <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($role->name == 'superAdmin'): ?>
                <li>User</li>
                <?php else: ?>
                <li><?php echo e($role->name); ?></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="showDetails">
            <strong>user skills</strong>
            <p><strong>blood group </strong> <?php echo e($user->skills->bloodGroup); ?></p>
            <p><strong>date of birth </strong> <?php echo e($user->skills->dob); ?></p>
            <strong>education </strong><p> <?php echo e($user->skills->education); ?></p>
            <strong>skills </strong><p> <?php echo e($user->skills->skills); ?></p>
        </div>

        <div class="showDetails">
            <strong>payment proof</strong><br>
            <a href="<?php echo e(asset($user->payments->paymentResept)); ?>">click here to see</a>
        </div>

        <div class="showDetails">
            <strong>approve user</strong><br>
            <?php if($user->approved): ?>
                    <a href="/admin/approveUser/diapprove/<?php echo e($user->id); ?>">disapprove</a>
                    <?php else: ?>
                    <a href="/admin/approveUser/approve/<?php echo e($user->id); ?>">approve</a>
            <?php endif; ?>
        </div>

        <div class="showDetails">
            <strong>edit user ablity</strong>
            <form action="<?php echo e(route('admin.changeRole')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="userId" value='<?php echo e($user->id); ?>'>
                <select name="role">
                    <option value="admin">admin</option>
                    <option value="post manager">post manager</option>
                    <option value="user">user</option>
                </select>
                <button>change</button>
            </form>
        </div>

        <div class="showDetails">
            <strong>change position</strong>
            <form action="<?php echo e(route('admin.changeposition')); ?>" method="post">
                <input type="hidden" name="userId" value='<?php echo e($user->id); ?>'>
                <?php echo csrf_field(); ?>
                <select name="position">
                    <option value="advisor">advisor</option>
                    <option value="core_members">core_members</option>
                    <option value="sub_members">sub_members</option>
                    <option value="executive_member">executive member</option>
                </select>

                <button>change</button>
            </form>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Admin/Users/validateUser.blade.php ENDPATH**/ ?>