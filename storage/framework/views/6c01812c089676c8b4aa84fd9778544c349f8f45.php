<?php $__env->startSection('headerFiles'); ?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/home.css')); ?>">
<script src="<?php echo e(asset('js/pages/home.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php if($bannerimages): ?>
        <?php $__currentLoopData = $bannerimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="swiper-slide" style="background-image: url('<?php echo e(asset($image->imageUrl)); ?>')"></div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?> 
          <div class="swiper-slide">sorry no image found</div>
       <?php endif; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

  <div class="fullwidthBox">
    <h2>title post image</h2>
    <div class="borderBottom">
      <div></div>
    </div>

    <div class="fullContentBox">
      <div class="fullImageBox" style="background-image: url('https://dinbandhuhelpfoundation.weebly.com/uploads/1/2/5/1/125115490/result-1598855569772_orig.jpg')">

      </div>
      <div class="fullTextBox">
          <h4>information short discription</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eius nobis animi maxime ullam ut doloremque fugit, quae vel molestiae harum. Aspernatur possimus, debitis magnam inventore tempore aperiam ipsum est.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eius nobis animi maxime ullam ut doloremque fugit, quae vel molestiae harum. Aspernatur possimus, debitis magnam inventore tempore aperiam ipsum est.</p>
      </div>
    </div>
  </div>

  <div class="vissionMissionBox">
    <div>
      <h2>vission</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas suscipit autem earum? Fugiat repellat amet unde enim pariatur commodi nisi aut minima, praesentium eaque, nostrum magnam maiores voluptates incidunt itaque!</p>
    </div>
    <div>
      <h2>mission</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas suscipit autem earum? Fugiat repellat amet unde enim pariatur commodi nisi aut minima, praesentium eaque, nostrum magnam maiores voluptates incidunt itaque!</p>
    </div>
  </div>

  <div class="paralaxBox f-jc-ac">
      <h2> our tage line goes here</h2>
  </div>



  <?php if($posts): ?>
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="<?php echo e(route('user.showSinglePost',$post->id)); ?>">
        <div class="postBox" style="background-image: linear-gradient(rgba(255, 255, 255, 0),black),url('<?php echo e(asset($post->thumbnailUrl)); ?>')">
          <div>
            <h2><?php echo e($post->name); ?></h2>
            <p><?php echo e($post->shortDescription); ?></p>
          </div>
          
        </div>
      </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/welcome.blade.php ENDPATH**/ ?>