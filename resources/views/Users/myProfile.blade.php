@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/pages/users/myProfile.css') }}">
    <script src="{{ asset('js/pages/myprofile.js') }}" defer></script>
@endsection

@section('mianContent')
    <div class="profileCard">
        <div class="headInformation">
            <img src="{{ asset('networkingFiles/svgs/fullLogo.svg') }}" alt="" srcset="">
            <p><strong>head offive :</strong>village - chichirda , Post-Saida (Chakarbhata), Dist-Bilaspur (C.G)</p>
            <p><strong>working Add : </strong>3/ware House Road , Haribhumi Press , Bilaspur (C.G) </p>
            <strong>object : Development of the society Through The public Awarness</strong>
            <h1>we thankyou for becoming a user</h1>
        </div>

        <div class="backCircle f-jc-ac">
            <div style="background-image: linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.392)),url('@if(Auth::user()->profilepic) {{ asset(Auth::user()->profilepic) }} @else https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png @endif')"></div>
            <form action="{{ route('user.changeProfile') }}" method="post" id="changeProfile" enctype="multipart/form-data">
                @csrf
                <label for="profilePic" class="f-jc-ac"><i class="im im-pencil"></i></label>
                <input type="file" name="profilepic" id="profilePic" class="no-display" >
            </form>
        </div>

        <div class="infoField">
            <strong>name</strong>
            <p>{{ Auth::user()->name }}</p>
        </div>

        

        <div class="infoField">
            <strong>email</strong>
            <p>{{ Auth::user()->email }}</p>
        </div>

        <div class="infoField">
            <strong>number</strong>
            <p>{{ Auth::user()->number }}</p>
        </div>
    </div>
@endsection