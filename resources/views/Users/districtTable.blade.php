@extends('layouts.app')

@section('headerFiles')
<link rel="stylesheet" href="{{ asset('css/pages/users/otherMembers.css') }}">

@endsection

@section('mianContent')

    <h2>{{ $state->stateName}}
    
        @if ($state->show == 0)
        : hidden
        @else
        : showing
        @endif</h2>

    <table border="1" class="districtTable">
        <tr>
            <th>name</th>
            <th>members</th>
            <th>action</th>
        </tr>

        @foreach ($districts as $item)
        
            <tr>
                <td>{{ $item->districtsName }}</td>
                <td><a href="/user/otherMembers/{{ $state->stateName }}/{{ $item->id }}">members</a></td>
                <td>
                    @if ($item->show == 0)
                        <a href="/admin/showlocation/district/{{ $item->id }}/show" class="f-jc-ac">show</a>
                        @else
                        <a href="/admin/showlocation/district/{{ $item->id }}/hide" class="f-jc-ac">hide</a>
                    @endif
                </td>
            </tr>

        @endforeach

    </table>

@endsection