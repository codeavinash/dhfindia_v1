
@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/conponents/verifyEmail.css') }}">
@endsection

@section('mianContent')
    <div class="sectionBox f-jc-ac">
        <div class="notificationBox">
            <h2><i class="im im-mail"></i>please verify your email address a new verification is send to your given email address </h2>
            <strong>dont got one then click the link below</strong>
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="resendBtn">{{ __('click here to request another') }}</button>
            </form>
        </div>
    </div>
@endsection