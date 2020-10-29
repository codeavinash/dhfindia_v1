@extends('layouts.app')

@section('headerFiles')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous" defer></script>
<link rel="stylesheet" href="{{ asset('css/pages/users/joinUs.css') }}">
<script src="{{ asset('js/pages/joinus.js') }}" defer></script>
<script src="{{ asset('js/imagepreview.js') }}" defer></script>

@endsection

@section('mianContent')

<div class="titleImage f-jc-ac">
    <img src="{{ asset('networkingFiles/svgs/fullLogo.svg') }}" alt="" srcset="">
    <p><strong>head offive :</strong>village - chichirda , Post-Saida (Chakarbhata), Dist-Bilaspur (C.G)</p>
    <p><strong>working Add : </strong>3/ware House Road , Haribhumi Press , Bilaspur (C.G) </p>
    <strong>object : Development of the society Through The public Awarness</strong>

    <strong class="note">* remember to upload an payment proof </strong>
</div>

    <div class='formContainer'>
        <div class="formTitle f-jc-ac">
            join us and become a member of our team for more information contact us on 
        </div>

        <form action="{{ route('user.joinusForm') }}" method="post" enctype="multipart/form-data">

            @csrf

            <label for="picIn" id="profilePic" class="f-jc-ac imageBox" style="background-image:url('{{ asset(Auth::user()->profilepic) }}') "><i class="im im-cloud-upload"></i>upload a profile image</label>
            <input type="file" name="profilePic" id="picIn" accept="image/x-png,image/gif,image/jpeg" class="no-display imageInputField" >

            <label for="fulname">enter name</label>
            <input type="text" name="fulname" id="fulname" class="cutInput" value="{{ Auth::user()->name }}" required>

            <label for="mobile">enter mobile number <strong>*same number as per loged in</strong></label>
            <input type="number" name="mobileNumber" id="mobile" class="cutInput" value="{{ Auth::user()->number }}" required>

            <label for="gender">gender</label>
            <select name="gender" id="gender">
                <option value="">male</option>
                <option value="">female</option>
                <option value="">other</option>
            </select>

            <label for="dob">date of birth</label>
            <input type="date" name="dateOfBirth" id="dob" required>

            <label for="email">enter your email <strong>* enter the same email form which you have loged in</strong></label>
            <input type="email" name="email_id" id="email" value="{{ Auth::user()->email }}" required>

            <label for="state">state</label>
            <select name="state" id="state" required>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->stateName }}</option>
                @endforeach
            </select>

            <label for="District">District</label>
            <select name="District" id="District" required>
                
            </select>

            <label for="bg">blood group</label>
            <select name="blood_group" id="bg" >
                <option value="dontKnow">dont know</option>
                <option value="a+">a +</option>
                <option value="a-">a -</option>
                <option value="b+">b +</option>
                <option value="b-">b -</option>
                <option value="o+">o +</option>
                <option value="o-">o -</option>
                
                <option value="ab+">ab +</option>
                <option value="ab-">ab -</option>

            </select>

            <label for="education">education</label>
            <input type="text" name="education" id="education" required>

            <label for="skills">your skills</label>
            <textarea name="skills" id="skills" rows="10" required></textarea>

            <label for=""><strong>payment</strong>PhonePe / PayTm / Google Pay or <strong>(Phonenumber: +91 91119 06974)</strong></label>
            
            <table class="displayMobile">
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

            <label for="payment">upload payment proof</label>
            <input type="file" name="paymentProof" id="payment" required>


            <button type="submit" name="submit">join us</button>

        </form>

    </div>
    <div class="payment">
        <img src="{{ asset('networkingFiles/images/paymet_barcode/WhatsApp Image 2020-10-04 at 8.09.52 AM.jpeg') }}" alt="" srcset="">
    </div>

    
@endsection