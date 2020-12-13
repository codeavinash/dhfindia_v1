
@extends('layouts.app') 

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/emailVerification.css') }}">
@endsection

@section('mainContent')

    <section class="email-verification-section f jc ac">
        <div class="email-verf-container">
            <img src="{{ asset('images/illustration/emailLogo.svg') }}" alt="" class="email-illustration">
            <h1 class="notification-text">please verify your email address a new verification is send to your given email address </h1>
            <strong class="shor-des">click the link below to get another email</strong>
            <form  method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="resendBtn">{{ __('click here to request another') }}</button>
            </form>
        </div>
    </section>

@endsection