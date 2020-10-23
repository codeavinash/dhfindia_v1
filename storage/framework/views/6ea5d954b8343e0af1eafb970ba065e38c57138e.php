<?php $__env->startSection('headerFiles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/memberDetails.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>



    <?php if(count($totalmembers) <= 0): ?>
    
    

    <div class="headnotification f-jc-ac"> sorry no members found !</div>

    <?php else: ?>
    <div class="cardHolder ">
        
        

        <?php if( $advisors ): ?>
            <div class="Headingtitle">chief advisor</div>
            <div class="borderBottom">
                <div></div>
            </div>
            <div class="cardcontainer f-jb-ac">
                <?php $__currentLoopData = $advisors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                            <a href="<?php echo e(route('admin.validateUser',$member->id)); ?>" class="fulllink">
                    <?php endif; ?>
                    <div class="membercard">
                        
                        <div class="imageContainer f-jc-ac">
                            <div style="background-image:url('<?php echo e(asset($member->profilepic)); ?>') ">

                            </div>
                        </div>
                        <div class="contentBox f-jc-ac">
                            <strong><?php echo e($member->name); ?></strong>
                            <span>Chief Advisor</span>
                        </div>
                    </div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        <?php endif; ?>

        <?php if($coreMembers): ?>
        <div class="Headingtitle">chief community members</div>
        <div class="borderBottom">
            <div></div>
        </div>
        <div class="cardcontainer f-jb-ac">

            
            <?php $__currentLoopData = $coreMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
            <a href="<?php echo e(route('admin.validateUser',$member->id)); ?>" class="fulllink">
            <?php endif; ?>
                <div class="membercard">
                    
                    <div class="imageContainer f-jc-ac">
                        <div style="background-image:url('<?php echo e(asset($member->profilepic)); ?>')">

                        </div>
                    </div>
                    <div class="contentBox f-jc-ac">
                        <strong><?php echo e($member->name); ?></strong>
                        <span>Chief community member</span>
                    </div>
                </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
        </a>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <?php endif; ?>

        <?php if( $subMembers): ?>

        
        <div class="Headingtitle">sub community members</div>
        <div class="borderBottom">
            <div></div>
        </div>
        <div class="cardcontainer f-jb-ac">
            <?php $__currentLoopData = $subMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                            <a href="<?php echo e(route('admin.validateUser',$member->id)); ?>" class="fulllink">
            <?php endif; ?>
                <div class="membercard">
                    <div class="imageContainer f-jc-ac">
                        <div style="background-image:url('<?php echo e(asset($member->profilepic)); ?>')">

                        </div>
                    </div>
                    <div class="contentBox f-jc-ac">
                        <strong><?php echo e($member->name); ?></strong>
                        <span>sub community Advisor</span>
                    </div>
                </div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
            </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <?php endif; ?>


        <?php if( $executive_member ): ?>
            <div class="Headingtitle">executive member</div>
            <div class="borderBottom">
                <div></div>
            </div>
            <div class="cardcontainer f-jb-ac">
                <?php $__currentLoopData = $executive_member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                            <a href="<?php echo e(route('admin.validateUser',$member->id)); ?>" class="fulllink">
                    <?php endif; ?>
                    <div class="membercard">
                        
                        <div class="imageContainer f-jc-ac">
                            <div style="background-image:url('<?php echo e(asset($member->profilepic)); ?>') ">

                            </div>
                        </div>
                        <div class="contentBox f-jc-ac">
                            <strong><?php echo e($member->name); ?></strong>
                            <span>executive member </span>
                        </div>
                    </div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        <?php endif; ?>


    </div>
    
    <?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/showMembers.blade.php ENDPATH**/ ?>