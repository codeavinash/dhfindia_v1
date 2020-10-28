<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome to dinbandhu help foundation </title>
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('css/conponents/navBar.css') }}">
    <script src="{{ asset('js/components/navBar.js')}}" defer></script>
    @yield('headerFiles')
</head>
<body>

    <div class="navBar  f-jc-ac">
            <div class="iconBox f-jb-ac">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <img src="{{ asset('networkingFiles/svgs/fullLogo.svg') }}" alt="">

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

                    @guest
                    <li class="hideinDesk"><a href="{{ route('login') }}"><i class="im im-key"></i>login</a></li>
                    <li class="hideinDesk"><a href="{{ route('register') }}"><i class="im im-edit"></i>create new account</a></li>
                    @endguest

                    <li><a href="{{ route('user.showallevents') }}"><i class="im im-flag"></i> all events</a></li>
                    <li><a href="{{ route('user.showPostbycat',1) }}"><i class="im im-newspaper-o"></i>media articals</a></li>
                    <li><a href="{{ route('user.joinAsMember') }}"><i class="im im-user-male"></i>join us and become a member</a></li>
                    <li><a href="{{ route('user.donateUs') }}"><i class="im im-gift-card"></i>donate us</a></li>
                    <li><a href="{{ route('aboutus') }}"><i class="im im-award"></i>about us</a></li>
                    <li><a href="{{ route('contactUs') }}"><i class="im im-phone"></i>contact us</a></li>
                </ul>
            </div>
            <div>
                <h2>members details</h2>
                <ul>
                    <li><a href="/user/otherMembers/Chhattisgarh/116"><i class="im im-users"></i>our advisor</a></li>
                    <li><a href="/user/otherMembers/Chhattisgarh/116"><i class="im im-user-male"></i>cheaf community members</a></li>
                    <li><a href="/user/otherMembers/Chhattisgarh/116"><i class="im im-user-circle"></i>sub community members</a></li>
                    <li><a href="{{ route('user.showStates') }}"><i class="im im-user-circle"></i>others states members</a></li>

                    @can('SuperAndAdmin')
                    <hr>
                    <li><a href="{{ route('admin.showallStates') }}">location / members</a></li>
                    @endcan
                </ul>
            </div>
            <div>
                <h2>profile</h2>
                <ul>
                    @guest
                    <li class="hideInMobile"><a href="{{ route('login') }}"><i class="im im-key"></i>login</a></li>
                    <li class="hideInMobile"><a href="{{ route('register') }}"><i class="im im-edit"></i>create new account</a></li>
                    @else
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="im im-sign-out"></i>
                        {{ __('Logout') }}
                    </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <li><a href="{{ route('user.showmyprofile') }}">my profile</a></li>
                    @endguest

                    @can('SuperAndAdmin')
                        <li><a href="{{ route('adminuioptions.index') }}"><i class="im im-picture-o"></i>user interface options</a></li>
                        <li><a href="{{ route('admin.showallusers','user') }}"><i class="im im-users"></i>all members details</a></li>
                        <li><a href="{{ route('admin.makeNotifiaction') }}">make new notification</a></li>
                    @endcan

                </ul>
            </div>
        </div>
    </div>

    @yield('mianContent')
    

    <div class="footerBox">
        <div class="listcontainer f-ja-ac">
            <div>
                <h3>contact details</h3>
                <ul>
                    <li><a href="{{ route('contactUs') }}">click here to constact us</a></li>
                    <li><strong>email :-</strong>dinbandhuhelpfoundation@gmail.com</li>
                    <li><strong>call us on</strong></li>
                    <li>
                        <ul>
                            <li>8319686409</li>
                            <li>9111906974 </li>
                            <li>9009560661</li>
                            <li>9630878271</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <h3>usefull links</h3>
                <ul>
                    <li><a href="">login</a></li>
                    <li><a href="">create new account</a></li>
                    <li><a href=""><strong>donate us</strong></a></li>
                    <li><a href="">join us and become membe</a></li>
                    <li><a href="">about us</a></li>
                </ul>
            </div>
            <div>
                <h3>social media</h3>
                <div class="socialMediaLinks f-jb-ac">
                    <a href="" class="soLink youtube f-jc-ac">
                        <i class="im im-youtube"></i>
                    </a>

                    <a href="" class="soLink whatsApp f-jc-ac">
                        <i class="im im-whatsapp"></i>
                    </a>

                    <a href="" class="soLink phone f-jc-ac">
                        <i class="im im-phone"></i>
                    </a>

                    <a href="" class="soLink phone f-jc-ac">
                        <i class="im im-facebook"></i>  
                    </a>
                </div>
            </div>


        </div>
    </div>

    <div class="blankScreen no-display">

    </div>

@if (Session::has('success'))
    <div class="notification f-jc-ac">
        <div class="f-jc-ac">
            {{ Session::get('success') }}
        </div>
        <i class="im im-x-mark-circle cancle"></i>
    </div>
@endif

</body>
</html>