<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/admin/showallmembers.css')); ?>">
    <script src="<?php echo e(asset('js/pages/Admin/memberDetails.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('mianContent'); ?>
    <div class="f-jc-ac roleContainer">
        <div class="showrole">
           V show all roles
        </div>

    </div>
    <div class="allroles">
        <div class="container f-jc-ac">
            <?php $__currentLoopData = $allRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($role->name =="superAdmin" ): ?><?php else: ?>  
            <a href="<?php echo e(route('admin.showallusers',$role->name)); ?>" class="
            <?php if($role->name == $currentrole->name): ?>
                selected
            <?php endif; ?>
            "><?php echo e($role->name); ?></a>
            <?php endif; ?>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="memberContainer">
        
            <?php if(count($users)!= 0): ?>
            <table class="memberTable" border="1">
                <tr>
                    <th>profile</th>
                    <th>name</th>
                    <th>email</th>
                    <th>number</th>
                    <th>delete user</th>
                    <th>update details</th>
                </tr>
            
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="details">
                        <td><img src="<?php echo e(asset($user->profilepic)); ?>" alt="" srcset=""></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->number); ?></td>
                        <td><a href="">delete</a></td>
                        <td><a href="<?php echo e(route('admin.updateUser',$user->id)); ?>">update</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
                <?php else: ?>
                sorry no user found
            <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Admin/Users/showUserdetails.blade.php ENDPATH**/ ?>