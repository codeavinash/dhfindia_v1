@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/pages/users/otherMembers.css') }}">
@endsection

@section('mianContent')

    <div class="section">
        @foreach ($states as $state)
        
            <div class="stateCard" style="background-image: linear-gradient(rgba(231, 68, 68, 0),black),url('{{ $state->backgroundImage }}')">

                @can('SuperAndAdmin')
                <a href="{{ route('admin.showDistrictTable',$state->id) }}" class="redirect"></a>
                
                @else
                <a href="{{ route('user.showDistricts',$state->stateName) }}" class="redirect"></a>

                @endcan
                <div class="title">
                    {{ $state->stateName }}
                    @can('SuperAndAdmin')
                    @if ($state->show == 0)
                    : hidden
                    @else
                    : showing
                    @endif
                    @endcan
                </div>

                @can('SuperAndAdmin')
                    <div class="editBox">
                        @if ($state->show == 0)
                        <a href="/admin/showlocation/state/{{ $state->id }}/show" class="f-jc-ac">show</a>
                        @else
                        <a href="/admin/showlocation/state/{{ $state->id }}/hide" class="f-jc-ac">hide</a>
                        @endif

                        <form action="{{ route('admin.changeImage',$state->id) }}" method="get">
                            <input type="text" name="backgoundImage" placeholder="enter image url">
                            <button>submit</button>
                        </form>
                    </div>
                @endcan

            </div>

        @endforeach
    </div>

@endsection