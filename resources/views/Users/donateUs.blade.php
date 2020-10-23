@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/pages/users/donateUs.css') }}">
@endsection

@section('mianContent')
    <div class="Containersection">
        <div class="paralaxhead f-jc-ac">
            <h2>donate us</h2>
        </div>

        <div class="detailsContainer f-ja-ac">
            <div class="bankDetaisContainer">
                <h4 class="f-jc-ac">bank details</h4>
                <table>
                    <tr>
                        <th>a/c holder</th>
                        <td>dinbandhu help foundation</td>
                    </tr>
                    <tr>
                        <th>bank name</th>
                        <td>yijaya bank</td>
                    </tr>
                    <tr>
                        <th>a/c number</th>
                        <td>78550100000115</td>
                    </tr>
                    <tr>
                        <th>ifsc code</th>
                        <td>yijb0007608</td>
                    </tr>
                    <tr>
                        <th>address</th>
                        <td>bilaspur chhattisgarh</td>
                    </tr>
                </table>
            </div>

            <img src="{{ asset('networkingFiles/images/paymet_barcode/WhatsApp Image 2020-10-04 at 8.09.52 AM.jpeg') }}" alt="" >
        </div>

    </div>
@endsection