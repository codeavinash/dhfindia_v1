@extends('layouts.app')

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/showMembers.css') }}">
    <script src="{{ asset('js/showmemberscard.js') }}" defer></script>
@endsection

@section('mainContent')




@if ($memberDetails['totalmembers'] == 0)
<div class="no-members-found-notification f jc ac">
    <div class="no-member-notification-text f ja ac">
        <i class="im im-frown-o no-member-icon"></i>
        <p>sorry no member found join us to become one</p>
    </div>
</div>

@else

<div class="members-section-links-show-hide-btn f jc ac">
    <i class="im im-angle-down "></i>
</div>

<div class="members-section-links f ja ac">
    <a href="#advis">advisory committee</a>
    <a href="#core">chief committee members </a>
    <a href="#sub">sub committee members</a>
    <a href="#execu">executive members</a> 
    <a href="volen">volenteer members</a>
</div>


<div class="page-title-conteiner backgroundImage" style="background-image: linear-gradient(rgba(0, 0, 0, 0.521),rgba(0, 0, 0, 0.575)),url('{{ asset('images/HeaderImagesfour.jpg') }}')">
    <strong class="page-title-text">
        our members details
    </strong>
</div>



<div class="member-container-section" id="advis">
    <h2 class="member-container-title">advisory committee</h2>

    <div class="member-card-holder f jb">

        @if (!count($memberDetails['advisor']))
        
        <div class="no-member-found-message f ja ac">
            <i class="im im-frown-o no-member-icon"></i>
            <p>sorry no member found join us to become one</p>
        </div>

        @else
            @foreach ($memberDetails['advisor'] as $item)


            <div class="member-cardes" style="background-image: url('{{ asset($item->profilepic) }}')">

                <div class="member-info-box">
                    <strong>{{ $item->name }}</strong>
                    <p>advisor</p>
                </div>

            </div>
        
        @endforeach
        @endif

    </div>

</div>



<div class="member-container-section" id="core">
    <h2 class="member-container-title">chief committee members </h2>

    <div class="member-card-holder f jb">

        @if (!count($memberDetails['core_mem']))
        
        <div class="no-member-found-message f ja ac">
            <i class="im im-frown-o no-member-icon"></i>
            <p>sorry no member found join us to become one</p>
        </div>

        @else
            @foreach ($memberDetails['core_mem'] as $item)


            <div class="member-cardes" style="background-image: url('{{ asset($item->profilepic) }}')">

                <div class="member-info-box">
                    <strong>{{ $item->name }}</strong>
                    <p>advisor</p>
                </div>

            </div>
        
        @endforeach
        @endif

    </div>

</div>



<div class="member-container-section" id="sub">
    <h2 class="member-container-title">sub committee members</h2>

    <div class="member-card-holder f jb">

        @if (!count($memberDetails['sub_mem']))
        
        <div class="no-member-found-message f ja ac">
            <i class="im im-frown-o no-member-icon"></i>
            <p>sorry no member found join us to become one</p>
        </div>

        @else
            @foreach ($memberDetails['sub_mem'] as $item)


            <div class="member-cardes" style="background-image: url('{{ asset($item->profilepic) }}')">

                <div class="member-info-box">
                    <strong>{{ $item->name }}</strong>
                    <p>advisor</p>
                </div>

            </div>
        
        @endforeach
        @endif

    </div>

</div>



<div class="member-container-section" id="execu">
    <h2 class="member-container-title">executive members</h2>

    <div class="member-card-holder f jb">

        @if (!count($memberDetails['exe_mem']))
        
        <div class="no-member-found-message f ja ac">
            <i class="im im-frown-o no-member-icon"></i>
            <p>sorry no member found join us to become one</p>
        </div>

        @else
            @foreach ($memberDetails['exe_mem'] as $item)


            <div class="member-cardes" style="background-image: url('{{ asset($item->profilepic) }}')">

                <div class="member-info-box">
                    <strong>{{ $item->name }}</strong>
                    <p>advisor</p>
                </div>

            </div>
        
        @endforeach
        @endif

    </div>

</div>



<div class="member-container-section" id="volen">
    <h2 class="member-container-title">volunteer Members</h2>

    <div class="member-card-holder f jb">

        @if (!count($memberDetails['exe_mem']))
        
        <div class="no-member-found-message f ja ac">
            <i class="im im-frown-o no-member-icon"></i>
            <p>sorry no member found join us to become one</p>
        </div>

        @else
            @foreach ($memberDetails['vol_mem'] as $item)


            <div class="member-cardes" style="background-image: url('{{ asset($item->profilepic) }}')">

                <div class="member-info-box">
                    <strong>{{ $item->name }}</strong>
                    <p>volunteer Members</p>
                </div>

            </div>
        
        @endforeach
        @endif

    </div>

</div>






@endif

@endsection