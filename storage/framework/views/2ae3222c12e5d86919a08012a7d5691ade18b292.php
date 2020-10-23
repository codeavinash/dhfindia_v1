<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome to dinbandhu help foundation </title>
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo e(asset('css/conponents/navBar.css')); ?>">
    <script src="<?php echo e(asset('js/components/navBar.js')); ?>" defer></script>
    <?php echo $__env->yieldContent('headerFiles'); ?>
</head>
<body>

    <div class="navBar  f-jc-ac">
            <div class="iconBox f-jb-ac">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <img src="<?php echo e(asset('networkingFiles/svgs/fullLogo.svg')); ?>" alt="">

            <i class="im im-bell notBtn"></i>
    </div>

    <div id="notificationBox">
        <div class="notificationHedTitle">
            <strong><i class="im im-bell-active"></i> notification</strong>
        </div>
        <ul class="notList">
            
        </ul>
    </div>


    <div class="space">

    </div>

    <div class="slider">
        <div class="sliderContainer f-jb-ac">
            <div>
                <h2>home</h2>
                <ul>
                    <li><a href="/"><i class="im im-home"></i>home</a></li>

                    <?php if(auth()->guard()->guest()): ?>
                    <li class="hideinDesk"><a href="<?php echo e(route('login')); ?>"><i class="im im-key"></i>login</a></li>
                    <li class="hideinDesk"><a href="<?php echo e(route('register')); ?>"><i class="im im-edit"></i>create new account</a></li>
                    <?php endif; ?>

                    <li><a href="<?php echo e(route('user.showallevents')); ?>"><i class="im im-flag"></i> all events</a></li>
                    <li><a href="<?php echo e(route('user.showPostbycat',1)); ?>"><i class="im im-newspaper-o"></i>media articals</a></li>
                    <li><a href="<?php echo e(route('user.joinAsMember')); ?>"><i class="im im-user-male"></i>join us and become a member</a></li>
                    <li><a href="<?php echo e(route('user.donateUs')); ?>"><i class="im im-gift-card"></i>donate us</a></li>
                    <li><a href="<?php echo e(route('aboutus')); ?>"><i class="im im-award"></i>about us</a></li>
                    <li><a href="<?php echo e(route('contactUs')); ?>"><i class="im im-phone"></i>contact us</a></li>
                </ul>
            </div>
            <div>
                <h2>members details</h2>
                <ul>
                    <li><a href="/user/otherMembers/Chhattisgarh/116"><i class="im im-users"></i>our advisor</a></li>
                    <li><a href="/user/otherMembers/Chhattisgarh/116"><i class="im im-user-male"></i>cheaf community members</a></li>
                    <li><a href="/user/otherMembers/Chhattisgarh/116"><i class="im im-user-circle"></i>sub community members</a></li>
                    <li><a href="<?php echo e(route('user.showStates')); ?>"><i class="im im-user-circle"></i>others states members</a></li>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                    <hr>
                    <li><a href="<?php echo e(route('admin.showallStates')); ?>">location / members</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div>
                <h2>profile</h2>
                <ul>
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="hideInMobile"><a href="<?php echo e(route('login')); ?>"><i class="im im-key"></i>login</a></li>
                    <li class="hideInMobile"><a href="<?php echo e(route('register')); ?>"><i class="im im-edit"></i>create new account</a></li>
                    <?php else: ?>
                    <li>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="im im-sign-out"></i>
                        <?php echo e(__('Logout')); ?>

                    </a>
                    </li>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>

                    <li><a href="<?php echo e(route('user.showmyprofile')); ?>">my profile</a></li>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('SuperAndAdmin')): ?>
                        <li><a href="<?php echo e(route('adminuioptions.index')); ?>"><i class="im im-picture-o"></i>user interface options</a></li>
                        <li><a href="<?php echo e(route('admin.showallusers','user')); ?>"><i class="im im-users"></i>all members details</a></li>
                        <li><a href="<?php echo e(route('admin.makeNotifiaction')); ?>">make new notification</a></li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldContent('mianContent'); ?>
    
    <div class="moreBox f-jc-ac">
        <i class="im im-speech-bubble-comments"></i>
    </div>

    <div class="footerBox">
        <div class="listcontainer f-ja-ac">
            <div>
                <h3>contact details</h3>
                <ul>
                    <li></li>
                </ul>
            </div>
            <div>
                <h3>usefull links</h3>
            </div>
            <div>
                <h3>social media</h3>
            </div>


        </div>
    </div>

    <div class="blankScreen no-display">

    </div>

<?php if(Session::has('success')): ?>
    <div class="notification f-jc-ac">
        <div class="f-jc-ac">
            <?php echo e(Session::get('success')); ?>

        </div>
        <i class="im im-x-mark-circle cancle"></i>
    </div>
<?php endif; ?>

</body>
</html><?php /**PATH /opt/lampp/htdocs/dhfindia/resources/views/layouts/app.blade.php ENDPATH**/ ?>