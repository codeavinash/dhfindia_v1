<?php $__env->startSection('headerFiles'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/pages/login.css')); ?>">
<script src="<?php echo e(asset('js/components/removeNotification.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mianContent'); ?>

<section class="f-jc-ac">
    <div class="formbox">

        <h3 >
            login
        </h3>

        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            
                <label for="email" ><?php echo e(__('E-Mail Address')); ?></label>
                <input id="email" type="email"  name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <strong class="errorText"><?php echo e($message); ?></strong>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            

            
                <label for="password"><?php echo e(__('Password')); ?></label>
                <input id="password" type="password"  name="password" required>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <strong class="errorText"><?php echo e($message); ?></strong>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            
            
            
             
                <input  type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label  for="remember">
                    <?php echo e(__('Remember Me')); ?>

                </label>
            
            <button type="submit" class="submitBtn">
                <?php echo e(__('Login')); ?>

            </button>
           
                    <?php if(Route::has('password.request')): ?>
                        <a href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Forgot Your Password?')); ?>

                        </a>
                    <?php endif; ?>
        
        </form>
        <div class="createNew f-jc-ac">
            <a href="<?php echo e(route('register')); ?>" class="f-jc-ac">create new account</a>
        </div>
    </div>
    

</section>

<?php if(Session::has('joinUsMessage')): ?>
    <div class="globalNotification f-jc-ac">
        <div class="notContainer f-jc-ac">
            <?php echo e(Session::get('joinUsMessage')); ?>

        </div>
        <i class="im im-x-mark-circle cancleBtn"></i>   
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/auth/login.blade.php ENDPATH**/ ?>