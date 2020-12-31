<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinbandhu help foundation | worlds best ngo for helping people</title>
<!-- external files cdn link -->

<link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous" defer></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>

<link rel="stylesheet" href="{{ asset('css/animations.css')}}">
<script src="{{ asset('js/css3-animate-it.js') }}" defer></script>


<!-- adding basic style sheets style and javascript -->
<link rel="stylesheet" href="{{ asset('css/default.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css')  }}">
<script src="{{ asset('js/navbar.js') }}" defer></script>


@yield('haederFiles')

</head>
<body>
    
<!-- navigation box star form here -->
<nav class="Top-genral-navitaion-container">
    <div class="Top-ganral-navigation-social-links f ja ac">
        <a href="https://www.facebook.com/Arunsahu3288/"><i class="im im-facebook"></i></a>
        <a href="http://instagram.com/dinbandhu_help_foundation"><i class="im im-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCHM3Ksoi8q2vpgCrTaZEPhg"><i class="im im-youtube"></i></a>
        <a href="https://twitter.com/DinbandhuHelp?s=09"><i class="im im-twitter"></i></a>
        <a href="https://maps.app.goo.gl/QYA7hQBjZpc3qmy8A"><i class="im im-location"></i></a>
    </div>

    <div class="Top-genral-navigation-contactDetails-Btns f ja ac">
        <a href=""><i class="im im-phone"></i> 831-968-6409</a>
        <a href=""><i class="im im-mail"></i> dinbandhuhelpfoundation@gmail.com</a>
        <a href="{{ route('user.donateUs') }}" class="Top-genral-navgation-btns f jc ac"> donate now</a> 
        <a href="{{ route('user.joinAsMember') }}" class="Top-genral-navgation-btns f jc ac"> join us</a> 

    </div>
    
</nav>

<nav class="Top-main-navigation-Container f ac">
    <a href="{{ route('root') }}" class="Top-main-navigation-logo-link"><img src="{{ asset('images/fullLogo.svg') }}" alt=""></a>

    <i class="im im-menu slider-btn"></i>

    <div class="Top-main-navigation-sidelink-container f ja ac ">
        <a href="{{ route('root') }}" class="home-link selected f jc ac">home <i class="im im-angle-down"></i></a>
        <div class="Top-navigation-sidelinks f jc ac">
            <div class="home-link f jc ac">events <i class="im im-angle-down"></i></div>
            <div class="Top-navigation-dropdown">
                <ul>
                    {{-- drop down for events list --}}
                    
                    @foreach ($eventList as $cat)
                        <a href="{{ route('user.showPostbycat',$cat->id) }}"><li class="f ac">{{ $cat->name }}</li></a>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="Top-navigation-sidelinks f jc ac">
            <div class="home-link f jc ac">members <i class="im im-angle-down"></i></div>
            <div class="Top-navigation-dropdown">
                <ul>
                   {{-- drop down for members --}}
                   <a href="/user/otherMembers/Chhattisgarh/116#advis"><li class="f ac"><i class="im im-users"></i>advisory committee</li></a>
                   <a href="/user/otherMembers/Chhattisgarh/116#core"><li class="f ac"><i class="im im-user-male"></i>chief committee members</li></a>
                   <a href="/user/otherMembers/Chhattisgarh/116#sub"><li class="f ac"><i class="im im-user-circle"></i>sub committee members</li></a>
                   <a href="/user/otherMembers/Chhattisgarh/116#execu"><li class="f ac"><i class="im im-user-circle"></i>executive members</li></a>
                   <a href="/user/otherMembers/Chhattisgarh/116#volen"><li class="f ac"><i class="im im-user-circle"></i>our volenteer members</li></a>
                   <a href="{{ route('user.showStates') }}"><li class="f ac"><i class="im im-user-circle"></i>others states members</li></a>


                   @can('SuperAndAdmin')
                   <a href="{{ route('admin.showallStates') }}"><li class="f ac"><i class="im im-location"></i>location / members</a></li>
                   @endcan
                </ul>
            </div>
        </div>
        <div class="Top-navigation-sidelinks f jc ac">
            <div  class="home-link f jc ac">join us <i class="im im-angle-down"></i></div>
            <div class="Top-navigation-dropdown">
                    <ul>
                       {{-- drop down for our details --}}
                       <a href="/aboutus#joining-details"><li class="f ac"><i class="im im-task-o"></i>joining details</li></a>
                       <a href="{{ route('user.joinAsMember') }}"><li class="f ac"><i class="im im-id-card"></i>join us</li></a>
                    </ul>
            </div>
        </div>
        <div class="Top-navigation-sidelinks f jc ac">
            <div class="home-link f jc ac">our details <i class="im im-angle-down"></i></div>
            <div class="Top-navigation-dropdown">
                <ul>
                   {{-- drop down for our details --}}
                   <a href="{{ route('user.donateUs') }}"><li class="f ac"><i class="im im-gift-card"></i>donate us</li></a>
                   <a href="{{ route('aboutus') }}"><li class="f ac"><i class="im im-award"></i>about us</li></a>
                   <a href="{{ route('contactUs') }}"><li class="f ac"><i class="im im-phone"></i>contact us</li></a>
                </ul>
            </div>
        </div>
        <div class="Top-navigation-sidelinks f jc ac">
            <div class="home-link f jc ac">other options <i class="im im-angle-down"></i></div>
            <div class="Top-navigation-dropdown Right-dropdown">
                <ul>
                   {{-- drop down for other options --}}
                   @guest
                   <a href="{{ route('login') }}"><li class="f ac"><i class="im im-key"></i>login</li></a>
                   <a href="{{ route('register') }}"><li class="f ac"><i class="im im-edit"></i>create new account</li></a>
                   @else
                   <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                   <li class="f ac">
                       
                                    <i class="im im-sign-out"></i>
                       {{ __('Logout') }}
                   
                   </li>
                    </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>

                   <a class="my-profile-btn"><li class="f ac">my profile</li></a>
                   @endguest

                   @can('managePost')
                       <a href="{{ route('admin.postOptions') }}"><li class="f ac">post Option</li></a>
                   @endcan

                   @can('SuperAndAdmin')
                   <a href="{{ route('adminuioptions.index') }}"><li class="f ac"><i class="im im-picture-o"></i>user interface options</li></a>
                   {{-- <a href="{{ route('admin.makeNotifiaction') }}"><li class="f ac"><i class="im im-bell"></i>notification section</li></a> --}}
                   @endcan
                </ul>
            </div>

            
        </div>
    </div>



    @if (auth()->user())

    <div class="my-profile-container f jc ac">
            <div class="my-profile-card">
                <div class="my-profile-banner-container f jc ac">
                    <img src="{{ asset('images/fullLogo.svg') }}" alt="" class="my-profile-benner-image">
                    <div class="hide-profile-btn f jc ac">
                        <i class="im im-x-mark"></i>
                    </div>
                </div>
                <div class="my-profile-details-container">

                    @if (auth()->user()->approved)
                    <p class="profile-status">verified member of dinbandhu help foundation<i class="im im-check-mark"></i></p>
                        @else
                    <p class="profile-status">please verify your profile by joining us</p>

                    @endif

                    <div class="profile-pic-container backgroundImage" style="background-image:url('@if(auth()->user()->profilepic){{ asset(auth()->user()->profilepic) }}@endif')">
                 
                <form action="{{ route('user.changeProfile') }}" method="post" id="changeProfile" enctype="multipart/form-data">
                   @csrf
                    <input type="file" name="profilepic" id="profile-pic" style="display: none" accept="image/x-png,image/gif,image/jpeg">
                    <label for="profile-pic" class="upload-image-btn f jc ac"><i class="im im-cloud-upload"></i></label>
                </form>
                </div>

                    <div class="profile-deatil-title f ac">
                        <strong class="profile-text-title">name</strong>{{ auth()->user()->name }}
                    </div>
                    <div class="profile-deatil-title f ac">
                        <strong class="profile-text-title">number</strong>{{ auth()->user()->number }}

                    </div>
                    <div class="profile-deatil-title f ac">
                        <strong class="profile-text-title">email</strong>{{ auth()->user()->email }}
                    </div>
                </div>
            </div>
    </div>

    @endif

</nav>

<div class="black-background">

</div>




<!-- navigation box ends here -->

@yield('mainContent')

<!-- bottom footer starts from here -->

@auth
<div class="Botton-notification-btn f jc ac">
    <img src="{{ asset('images/notificationBell.svg') }}" alt="">
</div>

<div id="notification-box-container">
    <div class="notifiaction-box-title f jc ac">
        <i class="im im-bell-active"></i> notifications <i class="im im-x-mark-circle" id="hide-notification-Box-btn"></i>
    </div>

    <ul>
        @if (auth()->user() && auth()->user()->approved)
        <li class="notificaiton-list-items f jc ac"><img src="{{ asset('images/templateBell.svg') }}" alt="">your profile is now approved thank you for showing support</li>
        @endif
        @foreach ($notificationList as $notefication)
        <a href="{{ $notefication->link }}"><li class="notificaiton-list-items f jc ac"><img src="{{ asset('images/templateBell.svg') }}" alt="">{{ $notefication->notification }}</li></a>
            
        @endforeach
    </ul>
</div>
@endauth

    <div class="total-visitior-container">

    </div>

    <div class="bottom-Footer-container" style="background-image: url('{{ asset('images/footerBackgroundImage.png') }}');">
        <div class="bottom-footer-center-container f ja ac">
                <div class="bottom-footer-box-containers">
                    <img src="{{ asset('images/fullLogo.svg') }}" alt="" srcset="" class="bottom-footer-full-logo">

                    <div class="footer-details cap">
                        village - chichirda , Post-Saida (Chakarbhata), Dist-Bilaspur (C.G)
                    </div>

                    <div class="footer-details cap">
                        <i class="im im-mobile"></i>831-968-6409
                    </div>

                    <div class="footer-details cap">
                        <i class="im im-mobile"></i>911-190-6974
                    </div>

                    <div class="footer-details cap">
                        <i class="im im-mobile"></i>810-372-7914
                    </div>

                    <div class="footer-details ">
                        <i class="im im-mail"></i>dinbandhuhelpfoundation@gmail.com
                    </div>

                </div>
                <div class="bottom-footer-box-containers">
                    <div class="footer-box-title">
                        usefull links
                        <div class="border-bottom">
                            <div></div>
                        </div>
                    </div>

                    <div class="footer-details cap">
                        <a href="{{ route('login') }}"> <i class="im im-key"></i> login</a>
                    </div>

                    <div class="footer-details cap">
                        <a href="{{ route('register') }}"><i class="im im-users"></i>create new account</a>
                    </div>

                    <div class="footer-details cap">
                        <a href="{{ route('user.joinAsMember') }}"><i class="im im-user-circle"></i>join us as member </a>
                    </div>

                    <div class="footer-details cap">
                        <a href="{{ route('user.donateUs') }}"> <i class="im im-award"></i> donate us </a>
                    </div>

                    <div class="footer-details cap">
                        <a href="{{ route('aboutus') }}"><i class="im im-info"></i>about us</a>
                    </div>
                    
                </div>
                <div class="bottom-footer-box-containers">

                    <div class="footer-box-title">
                        social media
                        <div class="border-bottom">
                            <div></div>
                        </div>
                    </div>

                    <div class="footer-socialmedia-links f ja ac">
                        <a href="https://www.youtube.com/channel/UCHM3Ksoi8q2vpgCrTaZEPhg"><i class="im im-youtube"></i></a>
                        <a href="http://instagram.com/dinbandhu_help_foundation"><i class="im im-instagram"></i></a>
                        <a href="https://twitter.com/DinbandhuHelp?s=09"><i class="im im-twitter"></i></a>
                    </div>

                    <div class="footer-socialmedia-links f ja ac">
                        <a href="https://t.me/joinchat/AAAAAE4EVI39XIVgIxDgKA"><i class="im im-paperplane"></i></a>
                        <a href="tel:8319686409"><i class="im im-phone"></i></a>
                        <a href="https://maps.app.goo.gl/QYA7hQBjZpc3qmy8A"><i class="im im-location"></i></a>
                        
                    </div>
                </div>
        </div>
    </div>
    <div class="bottom-Coppyright-bar">
        <div class="copyRight-text f jc ac">
            <a href="https://helpsquare.in">Copyright ©2020 avinash vishwakarma. All Rights Reserved</a>
        </div>

        <div class="copyRight-text-two f jc ac">
            <a href="tel:7000789511">click here to call us to make your website</a>
        </div>
    </div>

    <!-- =================================================== -->


</body>
</html>