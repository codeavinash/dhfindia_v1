@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/pages/memberDetails.css') }}">
@endsection

@section('mianContent')



    @if (count($totalmembers) <= 0)
    
    {{-- {{ $totalmembers }} --}}

    <div class="headnotification f-jc-ac"> sorry no members found !</div>

    @else
    <div class="cardHolder ">
        
        

        @if ( $advisors )
            <div class="Headingtitle">chief advisor</div>
            <div class="borderBottom">
                <div></div>
            </div>
            <div class="cardcontainer f-jb-ac">
                @foreach ($advisors as $member)
                @can('SuperAndAdmin')
                            <a href="{{ route('admin.validateUser',$member->id) }}" class="fulllink">
                    @endcan
                    <div class="membercard">
                        
                        <div class="imageContainer f-jc-ac">
                            <div style="background-image:url('{{ asset($member->profilepic) }}') ">

                            </div>
                        </div>
                        <div class="contentBox f-jc-ac">
                            <strong>{{ $member->name }}</strong>
                            <span>Chief Advisor</span>
                        </div>
                    </div>
                    @can('SuperAndAdmin')
                </a>
                    @endcan
                @endforeach

            </div>
        @endif

        @if ($coreMembers)
        <div class="Headingtitle">chief community members</div>
        <div class="borderBottom">
            <div></div>
        </div>
        <div class="cardcontainer f-jb-ac">

            
            @foreach ($coreMembers as $member)


            @can('SuperAndAdmin')
            <a href="{{ route('admin.validateUser',$member->id) }}" class="fulllink">
            @endcan
                <div class="membercard">
                    
                    <div class="imageContainer f-jc-ac">
                        <div style="background-image:url('{{ asset($member->profilepic) }}')">

                        </div>
                    </div>
                    <div class="contentBox f-jc-ac">
                        <strong>{{ $member->name }}</strong>
                        <span>Chief community member</span>
                    </div>
                </div>
                @can('SuperAndAdmin')
        </a>
            @endcan
            @endforeach

        </div>
        @endif

        @if ( $subMembers)

        
        <div class="Headingtitle">sub community members</div>
        <div class="borderBottom">
            <div></div>
        </div>
        <div class="cardcontainer f-jb-ac">
            @foreach ($subMembers as $member)
            @can('SuperAndAdmin')
                            <a href="{{ route('admin.validateUser',$member->id) }}" class="fulllink">
            @endcan
                <div class="membercard">
                    <div class="imageContainer f-jc-ac">
                        <div style="background-image:url('{{ asset($member->profilepic) }}')">

                        </div>
                    </div>
                    <div class="contentBox f-jc-ac">
                        <strong>{{ $member->name }}</strong>
                        <span>sub community Advisor</span>
                    </div>
                </div>

                @can('SuperAndAdmin')
            </a>
                @endcan
            @endforeach

        </div>

        @endif


        @if ( $executive_member )
            <div class="Headingtitle">executive member</div>
            <div class="borderBottom">
                <div></div>
            </div>
            <div class="cardcontainer f-jb-ac">
                @foreach ($executive_member as $member)
                @can('SuperAndAdmin')
                            <a href="{{ route('admin.validateUser',$member->id) }}" class="fulllink">
                    @endcan
                    <div class="membercard">
                        
                        <div class="imageContainer f-jc-ac">
                            <div style="background-image:url('{{ asset($member->profilepic) }}') ">

                            </div>
                        </div>
                        <div class="contentBox f-jc-ac">
                            <strong>{{ $member->name }}</strong>
                            <span>executive member </span>
                        </div>
                    </div>
                    @can('SuperAndAdmin')
                </a>
                    @endcan
                @endforeach

            </div>
        @endif


    </div>
    
    @endif


@endsection