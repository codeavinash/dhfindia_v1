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
        <a href=""><i class="im im-facebook"></i></a>
        <a href=""><i class="im im-instagram"></i></a>
        <a href=""><i class="im im-youtube"></i></a>
        <a href=""><i class="im im-twitter"></i></a>
    </div>

    <div class="Top-genral-navigation-contactDetails-Btns f ja ac">
        <a href=""><i class="im im-phone"></i> 831-968-6409</a>
        <a href=""><i class="im im-mail"></i> dinbandhuhelpfoundation@gmail.com</a>
        <a href="" class="Top-genral-navgation-btns f jc ac"> donate now</a> 
        <a href="" class="Top-genral-navgation-btns f jc ac"> join us</a> 

    </div>
    
</nav>

<nav class="Top-main-navigation-Container f ac">
    <a href="" class="Top-main-navigation-logo-link"><img src="{{ asset('images/fullLogo.svg') }}" alt=""></a>

    <i class="im im-menu slider-btn"></i>

    <div class="Top-main-navigation-sidelink-container f ja ac ">
        <a href="" class="home-link selected f jc ac">home <i class="im im-angle-down"></i></a>
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
                   <a href="/user/otherMembers/Chhattisgarh/116"><li class="f ac"><i class="im im-users"></i>our advisor</li></a>
                   <a href="/user/otherMembers/Chhattisgarh/116"><li class="f ac"><i class="im im-user-male"></i>cheaf community members</li></a>
                   <a href="/user/otherMembers/Chhattisgarh/116"><li class="f ac"><i class="im im-user-circle"></i>sub community members</li></a>
                   <a href="{{ route('user.showStates') }}"><li class="f ac"><i class="im im-user-circle"></i>others states members</li></a>

                   @can('SuperAndAdmin')
                   <hr>
                   <a href="{{ route('admin.showallStates') }}"><li class="f ac">location / members</a></li>
                   @endcan
                </ul>
            </div>
        </div>
        <div class="Top-navigation-sidelinks f jc ac">
            <div class="home-link f jc ac">donate us <i class="im im-angle-down"></i></div>
            
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
                   <li>
                       
                                    <i class="im im-sign-out"></i>
                       {{ __('Logout') }}
                   
                   </li>
                    </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>

                   <a href="{{ route('user.showmyprofile') }}"><li class="f ac">my profile</li></a>
                   @endguest

                   @can('SuperAndAdmin')
                   <a href="{{ route('adminuioptions.index') }}"><li class="f ac"><i class="im im-picture-o"></i>user interface options</li></a>
                   <a href="{{ route('admin.showallusers','user') }}"><li class="f ac"><i class="im im-users"></i>all members details</li></a>
                   <a href="{{ route('admin.makeNotifiaction') }}"><li class="f ac">make new notification</li></a>
                   @endcan
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="black-background">

</div>



<!-- navigation box ends here -->

@yield('mainContent')

<!-- bottom footer starts from here -->

    <div class="Botton-notification-btn f jc ac">
        <img src="{{ asset('images/notificationBell.svg') }}" alt="">
    </div>

    <div id="notification-box-container">
        <div class="notifiaction-box-title f jc ac">
            <i class="im im-bell-active"></i> notifications <i class="im im-x-mark-circle" id="hide-notification-Box-btn"></i>
        </div>

        <ul>
            <a href="#"><li class="notificaiton-list-items f jc ac"><img src="{{ asset('images/templateBell.svg') }}" alt=""> a new user is avinash vishwakarma just signed in approve the user </li></a>

        </ul>
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
                        <a href=""> <i class="im im-key"></i> login</a>
                    </div>

                    <div class="footer-details cap">
                        <a href=""><i class="im im-users"></i>create new account</a>
                    </div>

                    <div class="footer-details cap">
                        <a href=""><i class="im im-user-circle"></i>join us as member </a>
                    </div>

                    <div class="footer-details cap">
                        <a href=""> <i class="im im-award"></i> donate us </a>
                    </div>

                    <div class="footer-details cap">
                        <a href=""><i class="im im-info"></i>about us</a>
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
                        <a href=""><i class="im im-youtube"></i></a>
                        <a href=""><i class="im im-whatsapp"></i></a>
                        <a href=""><i class="im im-instagram"></i></a>
                        <a href=""><i class="im im-twitter"></i></a>
                    </div>

                    <div class="footer-socialmedia-links f ja ac">
                        <a href=""><i class="im im-paperplane"></i></a>
                        <a href=""><i class="im im-phone"></i></a>
                        
                    </div>

                </div>
        </div>
    </div>
    <div class="bottom-Coppyright-bar">
        <div class="copyRight-text f jc ac">
            Copyright ©2020 avinash vishwakarma. All Rights Reserved
        </div>

        <div class="copyRight-text-two f jc ac">
            <a href="tel:7000789511">contact us to make your best website</a>
        </div>
    </div>

    <!-- =================================================== -->


</body>
</html>