@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/pages/admin/showallmembers.css') }}">
    <script src="{{ asset('js/pages/Admin/memberDetails.js') }}" defer></script>
@endsection


@section('mianContent')
    <div class="f-jc-ac roleContainer">
        <div class="showrole">
           V show all roles
        </div>

    </div>
    <div class="allroles">
        <div class="container f-jc-ac">
            @foreach ($allRoles as $role)
            @if ($role->name =="superAdmin" )@else  
            <a href="{{ route('admin.showallusers',$role->name) }}" class="
            @if ($role->name == $currentrole->name)
                selected
            @endif
            ">{{ $role->name }}</a>
            @endif
            
            @endforeach
        </div>
    </div>
    <div class="memberContainer">
        
            @if (count($users)!= 0)
            <table class="memberTable" border="1">
                <tr>
                    <th>profile</th>
                    <th>name</th>
                    <th>email</th>
                    <th>number</th>
                    <th>update details</th>
                </tr>
            
                @foreach ($users as $user)
                    <tr class="details">
                        <td><img src="{{ asset($user->profilepic) }}" alt="" srcset=""></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->number }}</td>
                        <td><a href="{{ route('admin.validateUser',$user->id) }}">update</a></td>
                    </tr>
                @endforeach
            </table>
                @else
                sorry no user found
            @endif
    </div>
@endsection