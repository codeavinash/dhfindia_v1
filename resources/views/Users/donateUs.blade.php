@extends('layouts.app')

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/donateUs.css') }}">
@endsection

@section('mainContent')

    <div class="page-title-container backgroundImage" style="background-image: linear-gradient(rgba(0, 0, 0, 0.507),rgba(0, 0, 0, 0.534)),url('{{ asset('images/backgroundimageTow.jpg') }}')">
        <h1 class="page-title-text">donate us</h1>
    </div>

    <div class="head-illustration-container f jc ac">
        <img src="{{ asset('images/illustration/DonateUsIllustration.jpg') }}" alt="" class="Donation-illustration-image">
    </div>

    <div class="Donation-details-container f ja ac">
        <div class="bank-Details-card">
            <h2 class="card-title f jc ac">bank details</h2>
            <div class="details f jb ac">
                <strong>a/c holder</strong>
                <strong>dinbandhu help foundation</strong>
            </div>
            <div class="details f jb ac">
                <strong>bank name</strong>
                <strong>BANK OF BARODA</strong>
            </div>
            <div class="details f jb ac">
                <strong>a/c number</strong>
                <strong>78550100000115</strong>
            </div>
            <div class="details f jb ac">
                <strong>ifsc code</strong>
                <strong>BARB0VJBILA</strong>
            </div>
            <div class="details f jb ac">
                <strong>address</strong>
                <strong>bilaspur chhattisgarh</strong>
            </div>
        </div>

        <img src="{{ asset('images/dhfPaymetImage.jpg') }}" alt="">
    </div>


@endsection