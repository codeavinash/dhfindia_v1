@extends('layouts.app')

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">
@endsection

@section('mainContent')

<div class="header-page-container backgroundImage" style="background: linear-gradient(rgba(0, 0, 0, 0.808),rgba(0, 0, 0, 0.349)),url('{{ asset('images/headerImageOne.jpeg') }}')">
    <h1 class="page-header-text">contact us</h1>
</div>

<div class="contact-us-box-container f ja ac">
    <div class="detail-container-box f jc ac">
        <form action="{{ route('user.contactUsSubmit') }}" method="POST" class="contactUs-form-Box">
            <div class="contact-us-form-heading f ac">
                contact us
            </div>
            @if (Session::has('contactsus'))
                        <p style="text-align: center;">
                            we will reply you as soon as possible
                        </p>
            @endif
            @csrf
                    <label for="userFullName">full name : @error('name')
                        <strong class="red">{{ $message }}</strong>
                        @enderror</label>
                    <input type="text" name="name" id="userFullName" required>
        
                    <label for="mobileNumber">mobile number :
                        @error('number')
                        <strong class="red">{{ $message }}</strong>
                        @enderror</label>
                    <input type="number" name="number" id="mobileNumber" required>
        
                    <label for="textMessage">message :@error('message')
                        <strong class="red">{{ $message }}</strong>
                        @enderror</label>
                    <textarea name="message" id="textMessage" required></textarea>

            <button class="contactUs-form-btn">submit</button>

        </form>
    </div>

    <div class="detail-container-box f jc ac image-box">
        <img src="{{ asset('images/illustration/contactusIllustration.svg') }}" alt="" srcset="" class="ContactUsVector">
    </div>

    <div class="detail-container-box f jc ac">
        <div class="contactUs-form-Box">
            <div class="contact-us-form-heading f ac">
                contact details
            </div>

            <strong class="contact-info">mobile numbers</strong>
            <strong class="contact-info contact-number">831-968-6409</strong>
            <strong class="contact-info contact-number">911-190-6974</strong>
            <strong class="contact-info contact-number">810-372-7914</strong>
            <strong class="contact-info">email address</strong>
            <strong class="contact-info contact-number">dinbandhuhelpfoundation@gmail.com </strong>

            <strong class="contact-info">address</strong>
            <strong class="contact-info contact-number">village - chichirda , Post-Saida (Chakarbhata), Dist-Bilaspur (C.G) </strong>
        </div>
    </div>
</div>



@endsection

