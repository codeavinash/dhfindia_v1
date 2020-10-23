<?php $__env->startSection('headerFiles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/pages/users/showSingalPost.css')); ?>">
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('managePost')): ?>
    
    <script defer>
        let deletepost = ()=>{
            $('#deleteForm').submit();
        }
    </script>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

<?php if($post == null): ?>
    sorry no post found
<?php else: ?>

<?php if(Session::has('message')): ?>
    <div class="notificationBox">
        <?php echo e(Session::get('message')); ?>


    </div>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('managePost')): ?>

    

    <form id="deleteForm" action="<?php echo e(route('adminpost.destroy',$post->id)); ?>" method="post" class="no-display">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    </form>

    <div class="toolsOptions">
        <a href="<?php echo e(route('adminpost.edit',$post->id)); ?>" class="f-jc-ac"><i class="im im-edit"></i>edit post</a>
        <span class="f-jc-ac" onclick="deletepost()"><i class="im im-trash-can"></i>delete post </span>
    </div>
<?php endif; ?>


<div class="postContainer">
    <h1 class="headding"><img src="<?php echo e(asset('networkingFiles/svgs/logo.svg')); ?>" alt=""><?php echo e($post->name); ?></h1>
    <div class="bottomBorder"><div></div></div>
    <h4 class="shortdes"><?php echo e($post->shortDescription); ?></h4>
    <div class="titleImage backgoundImageStyle" style="background-image: url('<?php echo e(asset($post->thumbnailUrl)); ?>')"></div>
    <div class="likeBox"><a href="<?php echo e(route('user.addLike',$post->id)); ?>" id="likebtn" class="<?php echo e($currentLike); ?> f-jc-ac"><i class="im im-facebook-like"></i> like <?php echo e(count($likes)); ?></a><a href="#form" class="f-jc-ac"><i class="im im-speech-bubble-comments"></i> comment</a></div>

    <div class="paracontainer">
        <?php echo $post->description; ?>

    </div>

<form action="<?php echo e(route('user.addnewcomment',$post->id)); ?>" method="post" class="addComment" id="form">
    <div class="commentTitle">
        <i class="im im-speech-bubble-comments"></i> add new comment
    </div>
    <?php echo csrf_field(); ?>
    <textarea name="commentBox"></textarea>
    <button name="submit">add comment</button>
</form>

    <div class="commentBox">
        <div class="commentTitle">
            <i class="im im-speech-bubble-comments"></i> <?php echo e(count($comments)); ?>  comments
        </div>
        <div class="comments">
            <?php if(count($comments) < 1): ?>
            no comments found be first to add one
            <?php else: ?>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($comment->status == "approved"): ?>
                    <strong><?php echo e($comment->userName); ?></strong>
                    <p><?php echo e($comment->userComment); ?></p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>

</div>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/Users/showSinglePost.blade.php ENDPATH**/ ?>