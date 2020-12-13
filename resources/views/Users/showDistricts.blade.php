@extends('layouts.app')

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/districtlist.css') }}">
@endsection

@section('mainContent')

    <div class="header-image-container backgroundImage f jc ac" style="background-image: linear-gradient(rgba(0, 0, 0, 0.719),black),url('{{ asset('images/headerImageOne.jpeg') }}');">
        " Telling stories that make a difference "
    </div>


    <div class="district-list-container-serction f ja ">
        <div class="state-image-container backgroundImage" style="background-image: url('{{ $state->backgroundImage }}')">
            <div class="state-name-box f jc ac">
                {{ $state->stateName }}
            </div>
        </div>

        <ul class="districtList-container">
            
            <li class="list-of-working-area">our working are</li>

            @foreach ($districts as $distic)
            <li class="district-name f ac">
                <a href="/user/otherMembers/{{ $state->stateName }}/{{ $distic->id }}">{{$distic->districtsName}}</a>
                @can('SuperAndAdmin')

                <a href="{{ route('admin.showallusers',$distic->id) }}" class="rankMembers">rank members</a>

                <a href="
                @if ($distic->show)
                /admin/showlocation/district/{{ $distic->id }}/hide
                    @else
                /admin/showlocation/district/{{ $distic->id }}/show
                @endif
                " class="distic-hideshow-eye">
                    @if ($distic->show)
                        <i class="im im-eye "></i>
                        @else
                        <i class="im im-eye-off red"></i> 
                    @endif
                </a>
                @endcan
            </li>
            @endforeach
        </ul>


    </div>


    

@endsection