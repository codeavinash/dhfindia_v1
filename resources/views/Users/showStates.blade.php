@extends('layouts.app')

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/showstateList.css') }}">
@endsection

@section('mainContent')

<div class="page-heading-container backgroundImage" style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgb(0, 0, 0)),url('{{ asset('images/headerImageTwo.jpeg') }}')">
    <strong class="page-title-text">showing states we work on</strong>
</div>

<div class="state-card-holder-section">
    <div class="state-card-holder f ja">
        @foreach ($states as $state)
        @can('SuperAndAdmin')

        
        <div class="state-card"  style="background-image: url('{{ $state->backgroundImage }}')"> 
            <div class="admin-option-container">
                <form action="{{ route('admin.changeImage',$state->id) }}" method="get" class="change-background-form">
                    <input type="text" name="backgoundImage" id="" placeholder="Background Image Url" class="change-background-input">
                    <button type="submit" class="submit_btn">change</button>
                </form>

                @if ($state->show)
                <a href="/admin/showlocation/state/{{ $state->id }}/hide" class="show-hide-btn f jc ac">hide</a>
                @else
                <a href="/admin/showlocation/state/{{ $state->id }}/show" class="show-hide-btn f jc ac">show</a>
                @endif
            </div>


            <a href="{{ route('admin.showDistrictTable',$state->id) }}">
                <div class="card-title f jc ac">
                {{ $state->stateName }}
                </div>
            </a>

            


            

            
        </div>


        @else
        <a href="{{ route('user.showDistricts',$state->stateName) }}" class="state-card"  style="background-image: url('{{ $state->backgroundImage }}')"> 
            <div class="card-title f jc ac">
            {{ $state->stateName }}
            </div>
        </a>

        @endcan
        @endforeach

        



    </div>


</div>


@endsection