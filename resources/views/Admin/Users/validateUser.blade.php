@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/pages/admin/validateUser.css') }}">
@endsection

@section('mianContent')

    <div class="section">

        <div class="profilePic" style="background-image: url('{{ asset($user->profilepic) }}')">

        </div>

        <div class="showDetails">
            <strong>approval status</strong>
            <p>
                @if ($user->approved)
                    approved
                    @else
                    not approved
                @endif
            </p>
        </div>

        <div class="showDetails">
            <strong>name</strong>
            <p>{{ $user->name }}</p>
        </div>

        <div class="showDetails">
            <strong>user position</strong>
            <p>{{ $user->position}}</p>
        </div>

        <div class="showDetails">
            <strong>phone number</strong>
            <p>{{ $user->number }}</p>
        </div>

        <div class="showDetails">
            <strong>email address</strong>
            <p>{{ $user->email }}</p>
        </div>

        <div class="showDetails">
            <strong>user state</strong>
            <p>{{ $user->state->stateName ?? 'not registered' }}</p>
        </div>

        <div class="showDetails">
            <strong>user district</strong>
            <p>{{ $user->district->districtsName ?? 'not registered' }}</p>
        </div>

        <div class="showDetails">
            <strong>user ablity</strong>
            <ul>

                {{-- {{ $user->roles }} --}}

            @foreach ($user->roles as $role)
                @if ($role->name == 'superAdmin')
                <li>User</li>
                @else
                <li>{{ $role->name }}</li>
                @endif
            @endforeach
            </ul>
        </div>

        <div class="showDetails">
            <strong>user skills</strong>
            <p><strong>blood group </strong> {{ $user->skills->bloodGroup ?? 'not registered' }}</p>
            <p><strong>date of birth </strong> {{ $user->skills->dob ?? 'not registered' }}</p>
            <strong>education </strong><p> {{ $user->skills->education ?? 'not registered' }}</p>
            <strong>skills </strong><p> {{ $user->skills->skills ?? 'not registered' }}</p>
        </div>

        @if($user->payments)
        <div class="showDetails">
            <strong>payment proof</strong><br>
            <a href="{{ asset($user->payments->paymentResept) }}">click here to see</a>
        </div>
        @endif

        <div class="showDetails">
            <strong>approve user</strong><br>
            @if ($user->approved)
                    <a href="/admin/approveUser/diapprove/{{ $user->id }}">disapprove</a>
                    @else
                    <a href="/admin/approveUser/approve/{{ $user->id }}">approve</a>
            @endif
        </div>

        <div class="showDetails">
            <strong>edit user ablity</strong>
            <form action="{{ route('admin.changeRole') }}" method="post">
                @csrf
                <input type="hidden" name="userId" value='{{ $user->id }}'>
                <select name="role">
                    <option value="admin">admin</option>
                    <option value="post manager">post manager</option>
                    <option value="user">user</option>
                </select>
                <button>change</button>
            </form>
        </div>

        <div class="showDetails">
            <strong>change position</strong>
            <form action="{{ route('admin.changeposition') }}" method="post">
                <input type="hidden" name="userId" value='{{ $user->id }}'>
                @csrf
                <select name="position">
                    <option value="advisor">advisor</option>
                    <option value="core_members">core_members</option>
                    <option value="sub_members">sub_members</option>
                    <option value="executive_member">executive member</option>
                </select>

                <button>change</button>
            </form>
        </div>

    </div>

@endsection