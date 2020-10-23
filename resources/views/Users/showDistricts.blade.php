@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/pages/users/otherMembers.css') }}">
@endsection 

@section('mianContent')

    {{-- <div class="stateBox" style="background-image: linear-gradient(rgba(0, 0, 0, 0),black),url('{{ $state->backgroundImage }}')">
        <div>
            {{ $state->stateName }}
        </div>
    </div>

    


    <ul class="districtList">
        <li><strong>select a district</strong></li>
        @foreach ($districts as $item)
                <li><a href="">{{ $item->districtsName }}</a></li>
        @endforeach
    </ul> --}}

    <div class="stateCard single" style="background-image: linear-gradient(rgba(0, 0, 0, 0),black),url('{{ $state->backgroundImage }}')">
        <div class="title">
            {{ $state->stateName }}
        </div>
    </div>

    <ul class="districtList">
        <li><strong>select a district</strong></li>
        @foreach ($districts as $distic)
            <li><a href="/user/otherMembers/{{ $state->stateName }}/{{ $distic->id }}">{{ $distic->districtsName }}</a></li>
        @endforeach
    </ul>


@endsection